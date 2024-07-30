<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    protected static $categories = [
        [
            'name' => 'High School',
            'description' => 'Past questions for high schools in Ghana and Kenya',
            'is_active' => true,
            'children' => [
                [
                    'name' => 'Ghana',
                    'description' => 'High school past questions in Ghana',
                    'is_active' => true,
                    'children' => [
                        [
                            'name' => 'WASSCE',
                            'description' => 'West African Senior School Certificate Examination past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Mathematics', 'description' => 'Math past questions', 'is_active' => true],
                                ['name' => 'English', 'description' => 'English past questions', 'is_active' => true],
                                ['name' => 'Science', 'description' => 'Science past questions', 'is_active' => true],
                                ['name' => 'Social Studies', 'description' => 'Social Studies past questions', 'is_active' => true],
                                ['name' => 'Biology', 'description' => 'Biology past questions', 'is_active' => true],
                                ['name' => 'Chemistry', 'description' => 'Chemistry past questions', 'is_active' => true],
                                ['name' => 'Physics', 'description' => 'Physics past questions', 'is_active' => true],
                                ['name' => 'Economics', 'description' => 'Economics past questions', 'is_active' => true],
                                ['name' => 'Geography', 'description' => 'Geography past questions', 'is_active' => true],
                                ['name' => 'History', 'description' => 'History past questions', 'is_active' => true],
                                ['name' => 'Literature', 'description' => 'Literature past questions', 'is_active' => true],
                                ['name' => 'General Agriculture', 'description' => 'General Agriculture past questions', 'is_active' => true],
                                ['name' => 'Elective Mathematics', 'description' => 'Elective Mathematics past questions', 'is_active' => true],
                                ['name' => 'Elective ICT', 'description' => 'Elective ICT past questions', 'is_active' => true],
                                ['name' => 'French', 'description' => 'French past questions', 'is_active' => true],
                                ['name' => 'Christian Religious Studies', 'description' => 'Christian Religious Studies past questions', 'is_active' => true],
                                ['name' => 'Government', 'description' => 'Government past questions', 'is_active' => true],
                                ['name' => 'Cost Accounting', 'description' => 'Cost Accounting past questions', 'is_active' => true],
                                ['name' => 'Financial Accounting', 'description' => 'Financial Accounting past questions', 'is_active' => true],
                                ['name' => 'Business Management', 'description' => 'Business Management past questions', 'is_active' => true],
                                ['name' => 'Food and Nutrition', 'description' => 'Food and Nutrition past questions', 'is_active' => true],
                                ['name' => 'Management in Living', 'description' => 'Management in Living past questions', 'is_active' => true],
                                ['name' => 'Textiles', 'description' => 'Textiles past questions', 'is_active' => true],
                                ['name' => 'Arts', 'description' => 'Arts past questions', 'is_active' => true],
                                ['name' => 'Graphic Design', 'description' => 'Graphic Design past questions', 'is_active' => true],
                                ['name' => 'Basketry', 'description' => 'Basketry past questions', 'is_active' => true],
                                ['name' => 'Sculpture', 'description' => 'Sculpture past questions', 'is_active' => true],
                                ['name' => 'Ceramics', 'description' => 'Ceramics past questions', 'is_active' => true],
                                ['name' => 'Leatherwork', 'description' => 'Leatherwork past questions', 'is_active' => true],
                                ['name' => 'Animal Husbandry', 'description' => 'Animal Husbandry past questions', 'is_active' => true],
                                ['name' => 'Electrical Engineering', 'description' => 'Electrical Engineering past questions', 'is_active' => true],
                                ['name' => 'Woodwork', 'description' => 'Woodwork past questions', 'is_active' => true],
                                ['name' => 'Building and Construction', 'description' => 'Building and Construction past questions', 'is_active' => true],
                            ]
                        ],
                        [
                            'name' => 'BECE',
                            'description' => 'Basic Education Certificate Examination past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Mathematics', 'description' => 'Math past questions', 'is_active' => true],
                                ['name' => 'English', 'description' => 'English past questions', 'is_active' => true],
                                ['name' => 'Science', 'description' => 'Science past questions', 'is_active' => true],
                                ['name' => 'Social Studies', 'description' => 'Social Studies past questions', 'is_active' => true],
                                ['name' => 'French', 'description' => 'French past questions', 'is_active' => true],
                                ['name' => 'ICT', 'description' => 'ICT past questions', 'is_active' => true],
                                // Add other subjects as needed
                            ]
                        ],
                        // Add other exams as needed
                    ]
                ],
                [
                    'name' => 'Kenya',
                    'description' => 'High school past questions in Kenya',
                    'is_active' => true,
                    'children' => [
                        [
                            'name' => 'KCSE',
                            'description' => 'Kenya Certificate of Secondary Education past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Mathematics', 'description' => 'Math past questions', 'is_active' => true],
                                ['name' => 'English', 'description' => 'English past questions', 'is_active' => true],
                                ['name' => 'Biology', 'description' => 'Biology past questions', 'is_active' => true],
                                ['name' => 'Chemistry', 'description' => 'Chemistry past questions', 'is_active' => true],
                                ['name' => 'Physics', 'description' => 'Physics past questions', 'is_active' => true],
                                ['name' => 'Geography', 'description' => 'Geography past questions', 'is_active' => true],
                                ['name' => 'History', 'description' => 'History past questions', 'is_active' => true],
                                ['name' => 'CRE', 'description' => 'Christian Religious Education past questions', 'is_active' => true],
                                ['name' => 'Business Studies', 'description' => 'Business Studies past questions', 'is_active' => true],
                                ['name' => 'Agriculture', 'description' => 'Agriculture past questions', 'is_active' => true],
                                // Add other subjects as needed
                            ]
                        ],
                        // Add other exams as needed
                    ]
                ]
            ]
        ],
        [
            'name' => 'University',
            'description' => 'Past questions for universities in Ghana and Kenya',
            'is_active' => true,
            'children' => [
                [
                    'name' => 'Ghana',
                    'description' => 'University past questions in Ghana',
                    'is_active' => true,
                    'children' => [
                        [
                            'name' => 'Computer Science',
                            'description' => 'Computer Science past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Data Structures', 'description' => 'Data Structures past questions', 'is_active' => true],
                                ['name' => 'Algorithms', 'description' => 'Algorithms past questions', 'is_active' => true],
                                ['name' => 'Operating Systems', 'description' => 'Operating Systems past questions', 'is_active' => true]
                            ]
                        ],
                        [
                            'name' => 'Business Administration',
                            'description' => 'Business Administration past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Management', 'description' => 'Management past questions', 'is_active' => true],
                                ['name' => 'Human Resources', 'description' => 'Human Resources past questions', 'is_active' => true],
                                ['name' => 'Marketing', 'description' => 'Marketing past questions', 'is_active' => true]
                            ]
                        ],
                        [
                            'name' => 'Engineering',
                            'description' => 'Engineering past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Mechanical Engineering', 'description' => 'Mechanical Engineering past questions', 'is_active' => true],
                                ['name' => 'Electrical Engineering', 'description' => 'Electrical Engineering past questions', 'is_active' => true],
                                ['name' => 'Civil Engineering', 'description' => 'Civil Engineering past questions', 'is_active' => true]
                            ]
                        ],
                        [
                            'name' => 'Medicine',
                            'description' => 'Medicine past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Anatomy', 'description' => 'Anatomy past questions', 'is_active' => true],
                                ['name' => 'Physiology', 'description' => 'Physiology past questions', 'is_active' => true],
                                ['name' => 'Pharmacology', 'description' => 'Pharmacology past questions', 'is_active' => true]
                            ]
                        ],
                        [
                            'name' => 'Law',
                            'description' => 'Law past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Constitutional Law', 'description' => 'Constitutional Law past questions', 'is_active' => true],
                                ['name' => 'Criminal Law', 'description' => 'Criminal Law past questions', 'is_active' => true],
                                ['name' => 'International Law', 'description' => 'International Law past questions', 'is_active' => true]
                            ]
                        ],
                        [
                            'name' => 'Economics',
                            'description' => 'Economics past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Microeconomics', 'description' => 'Microeconomics past questions', 'is_active' => true],
                                ['name' => 'Macroeconomics', 'description' => 'Macroeconomics past questions', 'is_active' => true],
                                ['name' => 'Econometrics', 'description' => 'Econometrics past questions', 'is_active' => true]
                            ]
                        ],
                        [
                            'name' => 'Accounting',
                            'description' => 'Accounting past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Financial Accounting', 'description' => 'Financial Accounting past questions', 'is_active' => true],
                                ['name' => 'Managerial Accounting', 'description' => 'Managerial Accounting past questions', 'is_active' => true],
                                ['name' => 'Tax Accounting', 'description' => 'Tax Accounting past questions', 'is_active' => true]
                            ]
                        ],
                        [
                            'name' => 'Marketing',
                            'description' => 'Marketing past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Market Research', 'description' => 'Market Research past questions', 'is_active' => true],
                                ['name' => 'Digital Marketing', 'description' => 'Digital Marketing past questions', 'is_active' => true],
                                ['name' => 'Sales Management', 'description' => 'Sales Management past questions', 'is_active' => true]
                            ]
                        ],
                        [
                            'name' => 'Nursing',
                            'description' => 'Nursing past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Pediatric Nursing', 'description' => 'Pediatric Nursing past questions', 'is_active' => true],
                                ['name' => 'Geriatric Nursing', 'description' => 'Geriatric Nursing past questions', 'is_active' => true],
                                ['name' => 'Critical Care Nursing', 'description' => 'Critical Care Nursing past questions', 'is_active' => true]
                            ]
                        ],
                        [
                            'name' => 'Education',
                            'description' => 'Education past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Curriculum Development', 'description' => 'Curriculum Development past questions', 'is_active' => true],
                                ['name' => 'Educational Psychology', 'description' => 'Educational Psychology past questions', 'is_active' => true],
                                ['name' => 'Special Education', 'description' => 'Special Education past questions', 'is_active' => true]
                            ]
                        ]
                    ]

                ],
                [
                    'name' => 'Kenya',
                    'description' => 'University past questions in Kenya',
                    'is_active' => true,
                    'children' => [
                        [
                            'name' => 'Computer Science',
                            'description' => 'Computer Science past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Data Structures', 'description' => 'Data Structures past questions', 'is_active' => true],
                                ['name' => 'Algorithms', 'description' => 'Algorithms past questions', 'is_active' => true],
                                ['name' => 'Operating Systems', 'description' => 'Operating Systems past questions', 'is_active' => true]
                            ]
                        ],
                        [
                            'name' => 'Business Administration',
                            'description' => 'Business Administration past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Management', 'description' => 'Management past questions', 'is_active' => true],
                                ['name' => 'Human Resources', 'description' => 'Human Resources past questions', 'is_active' => true],
                                ['name' => 'Marketing', 'description' => 'Marketing past questions', 'is_active' => true]
                            ]
                        ],
                        [
                            'name' => 'Engineering',
                            'description' => 'Engineering past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Mechanical Engineering', 'description' => 'Mechanical Engineering past questions', 'is_active' => true],
                                ['name' => 'Electrical Engineering', 'description' => 'Electrical Engineering past questions', 'is_active' => true],
                                ['name' => 'Civil Engineering', 'description' => 'Civil Engineering past questions', 'is_active' => true]
                            ]
                        ],
                        [
                            'name' => 'Medicine',
                            'description' => 'Medicine past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Anatomy', 'description' => 'Anatomy past questions', 'is_active' => true],
                                ['name' => 'Physiology', 'description' => 'Physiology past questions', 'is_active' => true],
                                ['name' => 'Pharmacology', 'description' => 'Pharmacology past questions', 'is_active' => true]
                            ]
                        ],
                        [
                            'name' => 'Law',
                            'description' => 'Law past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Constitutional Law', 'description' => 'Constitutional Law past questions', 'is_active' => true],
                                ['name' => 'Criminal Law', 'description' => 'Criminal Law past questions', 'is_active' => true],
                                ['name' => 'International Law', 'description' => 'International Law past questions', 'is_active' => true]
                            ]
                        ],
                        [
                            'name' => 'Economics',
                            'description' => 'Economics past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Microeconomics', 'description' => 'Microeconomics past questions', 'is_active' => true],
                                ['name' => 'Macroeconomics', 'description' => 'Macroeconomics past questions', 'is_active' => true],
                                ['name' => 'Econometrics', 'description' => 'Econometrics past questions', 'is_active' => true]
                            ]
                        ],
                        [
                            'name' => 'Accounting',
                            'description' => 'Accounting past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Financial Accounting', 'description' => 'Financial Accounting past questions', 'is_active' => true],
                                ['name' => 'Managerial Accounting', 'description' => 'Managerial Accounting past questions', 'is_active' => true],
                                ['name' => 'Tax Accounting', 'description' => 'Tax Accounting past questions', 'is_active' => true]
                            ]
                        ],
                        [
                            'name' => 'Marketing',
                            'description' => 'Marketing past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Market Research', 'description' => 'Market Research past questions', 'is_active' => true],
                                ['name' => 'Digital Marketing', 'description' => 'Digital Marketing past questions', 'is_active' => true],
                                ['name' => 'Sales Management', 'description' => 'Sales Management past questions', 'is_active' => true]
                            ]
                        ],
                        [
                            'name' => 'Nursing',
                            'description' => 'Nursing past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Pediatric Nursing', 'description' => 'Pediatric Nursing past questions', 'is_active' => true],
                                ['name' => 'Geriatric Nursing', 'description' => 'Geriatric Nursing past questions', 'is_active' => true],
                                ['name' => 'Critical Care Nursing', 'description' => 'Critical Care Nursing past questions', 'is_active' => true]
                            ]
                        ],
                        [
                            'name' => 'Education',
                            'description' => 'Education past questions',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Curriculum Development', 'description' => 'Curriculum Development past questions', 'is_active' => true],
                                ['name' => 'Educational Psychology', 'description' => 'Educational Psychology past questions', 'is_active' => true],
                                ['name' => 'Special Education', 'description' => 'Special Education past questions', 'is_active' => true]
                            ]
                        ]
                    ]

                ]
            ]
        ],
        [
            'name' => 'Training Colleges',
            'description' => 'Past questions for training colleges in Ghana and Kenya',
            'is_active' => true,
            'children' => [
                [
                    'name' => 'Ghana',
                    'description' => 'Training colleges past questions in Ghana',
                    'is_active' => true,
                    'children' => [
                        ['name' => 'Teacher Training', 'description' => 'Teacher training college past questions', 'is_active' => true],
                        [
                            'name' => 'Nursing Training College',
                            'description' => 'Past questions for nursing training colleges',
                            'is_active' => true,
                            'children' => [
                                ['name' => 'Anatomy and Physiology', 'description' => 'Anatomy and Physiology past questions', 'is_active' => true],
                                ['name' => 'Pharmacology', 'description' => 'Pharmacology past questions', 'is_active' => true],
                                ['name' => 'Medical Nursing', 'description' => 'Medical-Surgical Nursing past questions', 'is_active' => true],
                                ['name' => 'Pediatric Nursing', 'description' => 'Pediatric Nursing past questions', 'is_active' => true],
                                ['name' => 'Community Health Nursing', 'description' => 'Community Health Nursing past questions', 'is_active' => true],
                                ['name' => 'Psychiatric Nursing', 'description' => 'Psychiatric Nursing past questions', 'is_active' => true],
                                ['name' => 'Midwifery', 'description' => 'Midwifery past questions', 'is_active' => true],
                                ['name' => 'Community Health', 'description' => 'Community Health past questions', 'is_active' => true],
                                ['name' => 'Nutrition', 'description' => 'Nutrition past questions', 'is_active' => true],
                                ['name' => 'Health Promotion', 'description' => 'Health Promotion past questions', 'is_active' => true],
                                ['name' => 'Environmental Health', 'description' => 'Environmental Health past questions', 'is_active' => true],
                                ['name' => 'Maternal and Child Health', 'description' => 'Maternal and Child Health past questions', 'is_active' => true],
                                ['name' => 'Gynecology', 'description' => 'Gynecology past questions', 'is_active' => true],
                                // Add other subjects as needed
                            ]
                        ],
                        ['name' => 'Technical Training', 'description' => 'Technical training college past questions', 'is_active' => true],
                        ['name' => 'Agricultural Training', 'description' => 'Agricultural training college past questions', 'is_active' => true],
                        // Add other categories as needed
                    ]
                ],
                [
                    'name' => 'Kenya',
                    'description' => 'Training colleges past questions in Kenya',
                    'is_active' => true,
                    'children' => [
                        ['name' => 'Teacher Training', 'description' => 'Teacher training college past questions', 'is_active' => true],
                        ['name' => 'Nursing Training', 'description' => 'Nursing training college past questions', 'is_active' => true],
                        ['name' => 'Technical Training', 'description' => 'Technical training college past questions', 'is_active' => true],
                        ['name' => 'Agricultural Training', 'description' => 'Agricultural training college past questions', 'is_active' => true],
                        // Add other categories as needed
                    ]
                ]
            ]
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Recursive function to create categories and subcategories
        function createCategories(array $categories, $parentId = null)
        {
            foreach ($categories as $categoryData) {
                $children = $categoryData['children'] ?? [];
                unset($categoryData['children']);
                $categoryData['parent_id'] = $parentId;
                $category = Category::create($categoryData);
                if (!empty($children)) {
                    createCategories($children, $category->id);
                }
            }
        }

        // Call the function to seed the categories
        createCategories(static::$categories);
    }
}
