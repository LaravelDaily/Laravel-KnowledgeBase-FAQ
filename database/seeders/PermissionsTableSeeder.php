<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'category_create',
            ],
            [
                'id'    => '18',
                'title' => 'category_edit',
            ],
            [
                'id'    => '19',
                'title' => 'category_show',
            ],
            [
                'id'    => '20',
                'title' => 'category_delete',
            ],
            [
                'id'    => '21',
                'title' => 'category_access',
            ],
            [
                'id'    => '22',
                'title' => 'tag_create',
            ],
            [
                'id'    => '23',
                'title' => 'tag_edit',
            ],
            [
                'id'    => '24',
                'title' => 'tag_show',
            ],
            [
                'id'    => '25',
                'title' => 'tag_delete',
            ],
            [
                'id'    => '26',
                'title' => 'tag_access',
            ],
            [
                'id'    => '27',
                'title' => 'article_create',
            ],
            [
                'id'    => '28',
                'title' => 'article_edit',
            ],
            [
                'id'    => '29',
                'title' => 'article_show',
            ],
            [
                'id'    => '30',
                'title' => 'article_delete',
            ],
            [
                'id'    => '31',
                'title' => 'article_access',
            ],
            [
                'id'    => '32',
                'title' => 'faq_management_access',
            ],
            [
                'id'    => '33',
                'title' => 'faq_category_create',
            ],
            [
                'id'    => '34',
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => '35',
                'title' => 'faq_category_show',
            ],
            [
                'id'    => '36',
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => '37',
                'title' => 'faq_category_access',
            ],
            [
                'id'    => '38',
                'title' => 'faq_question_create',
            ],
            [
                'id'    => '39',
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => '40',
                'title' => 'faq_question_show',
            ],
            [
                'id'    => '41',
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => '42',
                'title' => 'faq_question_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
