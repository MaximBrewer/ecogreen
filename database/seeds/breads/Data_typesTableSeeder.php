<?php

use Illuminate\Database\Seeder;

class Data_typesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
     try {
        \DB::beginTransaction();

        \DB::table('data_types')->delete();

        \DB::table('data_types')->insert(array (
                0 => 
                array (
                    'id' => 1,
                    'name' => 'users',
                    'slug' => 'users',
                    'display_name_singular' => 'Пользователь',
                    'display_name_plural' => 'Пользователи',
                    'icon' => 'voyager-person',
                    'model_name' => 'TCG\\Voyager\\Models\\User',
                    'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                    'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                    'created_at' => '2020-08-23 17:10:43',
                    'updated_at' => '2020-10-06 14:30:16',
                ),
                1 => 
                array (
                    'id' => 2,
                    'name' => 'menus',
                    'slug' => 'menus',
                    'display_name_singular' => 'Menu',
                    'display_name_plural' => 'Menus',
                    'icon' => 'voyager-list',
                    'model_name' => 'TCG\\Voyager\\Models\\Menu',
                    'policy_name' => NULL,
                    'controller' => '',
                    'description' => '',
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => NULL,
                    'created_at' => '2020-08-23 17:10:43',
                    'updated_at' => '2020-08-23 17:10:43',
                ),
                2 => 
                array (
                    'id' => 3,
                    'name' => 'roles',
                    'slug' => 'roles',
                    'display_name_singular' => 'Role',
                    'display_name_plural' => 'Roles',
                    'icon' => 'voyager-lock',
                    'model_name' => 'TCG\\Voyager\\Models\\Role',
                    'policy_name' => NULL,
                    'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                    'description' => '',
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => NULL,
                    'created_at' => '2020-08-23 17:10:43',
                    'updated_at' => '2020-08-23 17:10:43',
                ),
                3 => 
                array (
                    'id' => 4,
                    'name' => 'categories',
                    'slug' => 'categories',
                    'display_name_singular' => 'Категория',
                    'display_name_plural' => 'Категории',
                    'icon' => 'voyager-categories',
                    'model_name' => 'TCG\\Voyager\\Models\\Category',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                    'created_at' => '2020-08-23 17:10:58',
                    'updated_at' => '2020-10-05 18:34:34',
                ),
                4 => 
                array (
                    'id' => 5,
                    'name' => 'posts',
                    'slug' => 'posts',
                    'display_name_singular' => 'Статья',
                    'display_name_plural' => 'Статьи',
                    'icon' => 'voyager-news',
                    'model_name' => 'TCG\\Voyager\\Models\\Post',
                    'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                    'created_at' => '2020-08-23 17:11:00',
                    'updated_at' => '2020-10-06 14:00:42',
                ),
                5 => 
                array (
                    'id' => 6,
                    'name' => 'pages',
                    'slug' => 'pages',
                    'display_name_singular' => 'Page',
                    'display_name_plural' => 'Pages',
                    'icon' => 'voyager-file-text',
                    'model_name' => 'TCG\\Voyager\\Models\\Page',
                    'policy_name' => NULL,
                    'controller' => '',
                    'description' => '',
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => NULL,
                    'created_at' => '2020-08-23 17:11:02',
                    'updated_at' => '2020-08-23 17:11:02',
                ),
                6 => 
                array (
                    'id' => 7,
                    'name' => 'products',
                    'slug' => 'products',
                    'display_name_singular' => 'Продукт',
                    'display_name_plural' => 'Продукты',
                    'icon' => 'voyager-bag',
                    'model_name' => 'App\\Models\\Product',
                    'policy_name' => NULL,
                    'controller' => '\\App\\Http\\Controllers\\Voyager\\ProductsController',
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2020-08-24 05:30:51',
                    'updated_at' => '2020-10-16 07:36:23',
                ),
                7 => 
                array (
                    'id' => 9,
                    'name' => 'category',
                    'slug' => 'category',
                    'display_name_singular' => 'Категория Группа',
                    'display_name_plural' => 'Категория Группы',
                    'icon' => 'voyager-categories',
                    'model_name' => 'App\\Models\\Category',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2020-08-24 05:41:26',
                    'updated_at' => '2020-10-05 18:36:58',
                ),
                8 => 
                array (
                    'id' => 11,
                    'name' => 'category_items',
                    'slug' => 'category-items',
                    'display_name_singular' => 'Категория Элемент',
                    'display_name_plural' => 'Категория Элементы',
                    'icon' => 'voyager-list',
                    'model_name' => 'App\\Models\\CategoryItems',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2020-08-24 05:47:16',
                    'updated_at' => '2020-10-05 18:39:31',
                ),
                9 => 
                array (
                    'id' => 12,
                    'name' => 'product_type_packings',
                    'slug' => 'product-type-packings',
                    'display_name_singular' => 'Тип фасовка продукта',
                    'display_name_plural' => 'Тип фасовки продукты',
                    'icon' => 'voyager-rum-1',
                    'model_name' => 'App\\Models\\ProductTypePacking',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2020-08-24 18:36:33',
                    'updated_at' => '2020-10-05 19:24:51',
                ),
                10 => 
                array (
                    'id' => 14,
                    'name' => 'content_menus',
                    'slug' => 'content-menus',
                    'display_name_singular' => 'Контентная страница',
                    'display_name_plural' => 'Контентные страницы',
                    'icon' => 'voyager-info-circled',
                    'model_name' => 'App\\Models\\ContentMenus',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2020-08-26 11:37:11',
                    'updated_at' => '2020-11-04 01:57:58',
                ),
                11 => 
                array (
                    'id' => 15,
                    'name' => 'chemicals',
                    'slug' => 'chemicals',
                    'display_name_singular' => 'Химикат',
                    'display_name_plural' => 'Химикаты',
                    'icon' => 'voyager-lab',
                    'model_name' => 'App\\Models\\Chemical',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2020-08-30 05:22:28',
                    'updated_at' => '2020-11-04 00:00:30',
                ),
                12 => 
                array (
                    'id' => 18,
                    'name' => 'propositions',
                    'slug' => 'propositions',
                    'display_name_singular' => 'Заявка',
                    'display_name_plural' => 'Заявки',
                    'icon' => 'voyager-thumb-tack',
                    'model_name' => 'App\\Models\\Proposition',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2020-08-30 05:40:02',
                    'updated_at' => '2020-10-05 19:35:35',
                ),
                13 => 
                array (
                    'id' => 21,
                    'name' => 'active_substance',
                    'slug' => 'active-substance',
                    'display_name_singular' => 'Активное вещество',
                    'display_name_plural' => 'Активные вещества',
                    'icon' => 'voyager-campfire',
                    'model_name' => 'App\\Models\\ActiveSubstance',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2020-08-31 08:08:51',
                    'updated_at' => '2020-11-04 00:00:59',
                ),
                14 => 
                array (
                    'id' => 22,
                    'name' => 'documents',
                    'slug' => 'documents',
                    'display_name_singular' => 'Документ',
                    'display_name_plural' => 'Документы',
                    'icon' => 'voyager-documentation',
                    'model_name' => 'App\\Models\\Documents',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2020-08-31 09:38:13',
                    'updated_at' => '2020-10-05 18:47:42',
                ),
                15 => 
                array (
                    'id' => 25,
                    'name' => 'chat_room',
                    'slug' => 'chat-room',
                    'display_name_singular' => 'Чат',
                    'display_name_plural' => 'Чаты',
                    'icon' => 'voyager-chat',
                    'model_name' => 'App\\Models\\ChatRoom',
                    'policy_name' => NULL,
                    'controller' => '\\App\\Http\\Controllers\\Voyager\\ChatController',
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 1,
                    'details' => '{"order_column":null,"order_display_column":"user_new_count","order_direction":"desc","default_search_key":null,"scope":null}',
                    'created_at' => '2020-08-31 15:05:14',
                    'updated_at' => '2020-10-05 18:41:03',
                ),
                16 => 
                array (
                    'id' => 26,
                    'name' => 'orders',
                    'slug' => 'orders',
                    'display_name_singular' => 'Заказ',
                    'display_name_plural' => 'Заказы',
                    'icon' => 'voyager-truck',
                    'model_name' => 'App\\Models\\Orders',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2020-08-31 18:23:45',
                    'updated_at' => '2020-11-04 04:05:16',
                ),
                17 => 
                array (
                    'id' => 27,
                    'name' => 'brands',
                    'slug' => 'brands',
                    'display_name_singular' => 'Производитель',
                    'display_name_plural' => 'Производители',
                    'icon' => NULL,
                    'model_name' => 'App\\Models\\Brand',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2020-09-28 19:36:23',
                    'updated_at' => '2020-10-15 17:13:41',
                ),
                18 => 
                array (
                    'id' => 31,
                    'name' => 'license',
                    'slug' => 'license',
                    'display_name_singular' => 'Лицензия',
                    'display_name_plural' => 'Лицензии',
                    'icon' => NULL,
                    'model_name' => 'App\\Models\\License',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2020-09-30 13:59:04',
                    'updated_at' => '2020-10-05 18:52:59',
                ),
                19 => 
                array (
                    'id' => 32,
                    'name' => 'norms',
                    'slug' => 'norms',
                    'display_name_singular' => 'Норма',
                    'display_name_plural' => 'Нормы по применение',
                    'icon' => NULL,
                    'model_name' => 'App\\Models\\Norm',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2020-09-30 19:23:36',
                    'updated_at' => '2020-10-26 10:50:36',
                ),
                20 => 
                array (
                    'id' => 34,
                    'name' => 'faqs',
                    'slug' => 'faqs',
                'display_name_singular' => 'Справочник (FAQ)',
                'display_name_plural' => 'Справочники (FAQS)',
                    'icon' => NULL,
                    'model_name' => 'App\\Models\\FAQ',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2020-10-02 07:33:08',
                    'updated_at' => '2020-10-20 11:26:50',
                ),
                21 => 
                array (
                    'id' => 36,
                    'name' => 'fruits',
                    'slug' => 'fruits',
                    'display_name_singular' => 'Культура',
                    'display_name_plural' => 'Культуры',
                    'icon' => NULL,
                    'model_name' => 'App\\Models\\Fruit',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2020-10-03 14:17:46',
                    'updated_at' => '2020-10-15 16:50:36',
                ),
                22 => 
                array (
                    'id' => 37,
                    'name' => 'order_status',
                    'slug' => 'order-status',
                    'display_name_singular' => 'Статус заказа',
                    'display_name_plural' => 'Статусы заказов',
                    'icon' => NULL,
                    'model_name' => 'App\\Models\\OrderStatus',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2020-11-03 21:14:32',
                    'updated_at' => '2020-11-04 07:18:16',
                ),
                23 => 
                array (
                    'id' => 38,
                    'name' => 'order_payment_types',
                    'slug' => 'order-payment-types',
                    'display_name_singular' => 'Тип оплаты заказа',
                    'display_name_plural' => 'Тип оплаты заказы',
                    'icon' => NULL,
                    'model_name' => 'App\\Models\\OrderPaymentType',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                    'created_at' => '2020-11-04 00:08:55',
                    'updated_at' => '2020-11-04 00:08:55',
                ),
                24 => 
                array (
                    'id' => 39,
                    'name' => 'order_shipping_types',
                    'slug' => 'order-shipping-types',
                    'display_name_singular' => 'Тип доставки заказа',
                    'display_name_plural' => 'Тип доставки заказы',
                    'icon' => NULL,
                    'model_name' => 'App\\Models\\OrderShippingType',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                    'created_at' => '2020-11-04 00:11:45',
                    'updated_at' => '2020-11-04 00:11:45',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
