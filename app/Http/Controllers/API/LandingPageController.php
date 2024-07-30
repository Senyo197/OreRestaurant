<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class LandingPageController extends Controller
{

    protected CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    public function home()
    {


        $categories = Category::with('questions')->whereHas('questions')->limit(4)->get();

        return response()->json(["categories" => $categories]);

    }


    public function categories()
    {
        // Cache key
        $cacheKey = 'categories_with_questions';

        // Check if the cached data exists
        $categoryTreeArray = Cache::remember($cacheKey, 60 * 60 * 24, function () {
            // Get all categories
            $categories = Category::with('questions')->get();

            // Build nested tree structure
            $categoryTree = $this->buildTree($categories);

            // Convert the category tree to array
            return $this->treeToArray($categoryTree);
        });

        // Return the JSON response
        return response()->json($categoryTreeArray, 200, [], JSON_PRETTY_PRINT);
    }

    /**
     * Build nested category tree.
     *
     * @param \Illuminate\Support\Collection $categories
     * @param int|null $parentId
     * @return array
     */
    private function buildTree($categories, $parentId = null)
    {
        $branch = array();

        foreach ($categories as $category) {
            if ($category->parent_id == $parentId) {
                $children = $this->buildTree($categories, $category->id);
                if ($children) {
                    $category->children = $children;
                }
                $branch[] = $category;
            }
        }

        return $branch;
    }

    /**
     * Convert category tree to array.
     *
     * @param array $categories
     * @return array
     */
    private function treeToArray($categories)
    {
        $array = array();
        foreach ($categories as $category) {
            $categoryArray = $category->toArray();
            if (isset($categoryArray['children'])) {
                $categoryArray['children'] = $this->treeToArray($categoryArray['children']);
            }
            $array[] = $categoryArray;
        }
        return $array;
    }

    public function about()
    {

    }
}
