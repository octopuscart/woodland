<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function index() {
        redirect('/');
    }

    //function for product list
    function ProductList($custom_id, $cat_id) {

        $tempcatid = $cat_id;



        $categories = $this->Product_model->productListCategories($cat_id);

        $data["categorie_parent"] = $this->Product_model->getparent($cat_id);
        $primaryparent = "0";
        foreach ($data["categorie_parent"] as $ckey => $cvalue) {
            if ($cvalue['parent_id'] == '0') {
                $primaryparent = $cvalue['id'];
            }
        }

        $categoriesString = $this->Product_model->stringCategories($primaryparent);
        $categoriesString = trim($categoriesString, ",");

        $this->db->where("id in ($categoriesString)");
        $query = $this->db->get('category');
        $producttgs = $query->result_array();

        $data['producttag'] = $producttgs;

        $this->db->where("parent_id", "0");
        $query = $this->db->get('category');
        $corecategories = $query->result_array();

        $products = array();
        $categories2 = array();
        foreach ($corecategories as $ckey => $cvalue) {
            $this->db->select("id, title, price, file_name, short_description, description");
            if (isset($_GET['mode'])) {
                if ($_GET['mode'] == 'test') {
                   
                } else {
                    $this->db->where("credit_limit", "");
                }
            } else {
                $this->db->where("credit_limit", "");
            }
            $this->db->where("category_id", $cvalue["id"]);
            $query = $this->db->get('products');
            $productslist = $query->result_array();
            if ($productslist) {
                $categories2[$cvalue["id"]] = $productslist[0]['file_name'];
            } else {
                $categories2[$cvalue["id"]] = "default.png";
            }
            $products[$cvalue["id"]] = $productslist;
        }


        $data['productlist'] = $products;

        $data["categories"] = $categories;
        $data["categories2"] = $categories2;
        $data["category"] = $cat_id;
        $session_last_custom = $this->session->userdata('session_last_custom');



        $this->load->view('Product/productList_1', $data);
    }

    function ProductSearch() {
        $data['keyword'] = $_GET['keyword'];
        $this->load->view('Product/productSearch', $data);
    }

    //function for details
    function ProductDetails($product_id) {
        $prodct_details = $this->Product_model->productDetails($product_id);
        if ($prodct_details) {
            $prodct_details_attrs = $this->Product_model->productDetailsVariants($product_id);

            $data['product_attr_variant'] = $prodct_details_attrs;

            $pquery = "SELECT pa.attribute, cav.attribute_value FROM product_attribute as pa
      join category_attribute_value as cav on cav.id = pa.attribute_value_id
      where pa.product_id = $product_id";
            $attr_products = $this->Product_model->query_exe($pquery);
            $data["product_attr"] = $attr_products;
            $categorie_parent = $this->Product_model->getparent($prodct_details['category_id']);
            $data["categorie_parent"] = $categorie_parent;
            $data["product_details"] = $prodct_details;


            $pquery = "SELECT pa.* FROM product_related as pr 
      join products as pa on pa.id = pr.related_product_id
      where pr.product_id = $product_id";
            $product_related = $this->Product_model->query_exe($pquery);

            $data["product_related"] = $product_related;

            $this->config->load('seo_config');
            $this->config->set_item('seo_title', $prodct_details['title']);
            $this->config->set_item('seo_desc', $prodct_details['short_description']);
            $this->config->set_item('seo_keywords', $prodct_details['keywords']);
            $this->config->set_item('seo_imgurl', imageserver . $prodct_details['file_name']);

            $this->load->view('Product/productDetails', $data);
        } else {
            $this->load->view('errors/html/error_404');
        }
    }

    function test() {
//        $this->session->unset_userdata('session_cart');
        //$session_cart = $this->Product_model->cartOperation(214, 1);
        $session_cart = $this->Product_model->cartData();
        echo "<pre>";
        print_r($session_cart);
    }

    function unsetData() {
        $this->session->unset_userdata('session_cart');
    }

    function customizationShirt1($productid) {
        $productdetails = $this->Product_model->productDetails($productid);

        $data['productdetails'] = $productdetails;
        $this->load->view('Product/customization_shirt', $data);
    }

    function customizationRedirect($custom_id, $product_id) {
        if ($custom_id == 1) {
            redirect('Product/customizationShirt/' . $product_id . "/" . $custom_id);
        }
        if ($custom_id == 2) {
            redirect('Product/customizationSuit/' . $product_id . "/" . $custom_id);
        }
        if ($custom_id == 4) {
            redirect('Product/customizationJacket/' . $product_id . "/" . $custom_id);
        }
        if ($custom_id == 3) {
            redirect('Product/customizationPant/' . $product_id . "/" . $custom_id);
        }
        if ($custom_id == 5) {
            redirect('Product/customizationTuxedoSuit/' . $product_id . "/" . $custom_id);
        }
        if ($custom_id == 6) {
            redirect('Product/customizationTuxedoJacket/' . $product_id . "/" . $custom_id);
        }
        if ($custom_id == 7) {
            redirect('Product/customizationTuxedoPant/' . $product_id . "/" . $custom_id);
        }
    }

    function customizationShirt($productid, $custom_id) {
        $productdetails = $this->Product_model->productDetails($productid, $custom_id);
        $data['productdetails'] = $productdetails;
        $data["custom_item"] = "Pant";
        $data['custom_id'] = $custom_id;
        $this->load->view('Product/customization_shirt', $data);
    }

    function customizationSuit($productid, $custom_id) {
        $productdetails = $this->Product_model->productDetails($productid, $custom_id);
        $data['productdetails'] = $productdetails;
        $data["custom_item"] = "Suit";
        $data['custom_id'] = $custom_id;
        $this->load->view('Product/customization_suit_v2', $data);
    }

    function customizationTuxedoSuit($productid, $custom_id) {
        $productdetails = $this->Product_model->productDetails($productid, $custom_id);
        $data['productdetails'] = $productdetails;
        $data["custom_item"] = "TuxedoSuit";
        $data['custom_id'] = $custom_id;

        $data['tuxedotype'] = "1";

        $this->load->view('Product/customization_suit_v2', $data);
    }

    function customizationTuxedoJacket($productid, $custom_id) {
        $productdetails = $this->Product_model->productDetails($productid, $custom_id);
        $data['productdetails'] = $productdetails;
        $data["custom_item"] = "TuxedoJacket";
        $data['custom_id'] = $custom_id;
        $data['tuxedotype'] = "1";
        $this->load->view('Product/customization_suit_v2', $data);
    }

    function customizationTuxedoPant($productid, $custom_id) {
        $productdetails = $this->Product_model->productDetails($productid, $custom_id);
        $data['productdetails'] = $productdetails;
        $data["custom_item"] = "TuxedoPant";
        $data['custom_id'] = $custom_id;
        $data['tuxedotype'] = "1";
        $this->load->view('Product/customization_suit_v2', $data);
    }

    function customizationSuitV2($productid, $custom_id) {
        $productdetails = $this->Product_model->productDetails($productid, $custom_id);
        $data['productdetails'] = $productdetails;
        $data["custom_item"] = "Suit";
        $data['custom_id'] = $custom_id;
        $this->load->view('Product/customization_suit_v3', $data);
    }

    function customizationPant($productid, $custom_id) {
        $productdetails = $this->Product_model->productDetails($productid, $custom_id);
        $data['productdetails'] = $productdetails;
        $data["custom_item"] = "Pant";
        $data['custom_id'] = $custom_id;
        $this->load->view('Product/customization_suit_v2', $data);
    }

    function customizationPantV2($productid, $custom_id) {
        $productdetails = $this->Product_model->productDetails($productid, $custom_id);
        $data['productdetails'] = $productdetails;
        $data["custom_item"] = "Pant";
        $data['custom_id'] = $custom_id;
        $this->load->view('Product/customization_suit_v3', $data);
    }

    function customizationJacket($productid, $custom_id) {
        $productdetails = $this->Product_model->productDetails($productid, $custom_id);
        $data['productdetails'] = $productdetails;
        $data["custom_item"] = "Jacket";
        $data['custom_id'] = $custom_id;
        $this->load->view('Product/customization_suit_v2', $data);
    }

    function testp() {
        echo $pquery = "select id, short_description from products group by short_description";
        $attr_products = $this->Product_model->query_exe($pquery);
        echo "<pre>";
        foreach ($attr_products as $key => $value) {
            echo "<br/>";
            $ids = $value['id'];
            $description = $value['short_description'];
            echo $pquery = 'select id, short_description from products where short_description = "' . $description . '" and id!=' . $ids;
            $despro = $this->Product_model->query_exe($pquery);

            foreach ($despro as $skey => $svalue) {
                $pquery = 'update  products set variant_product_of = ' . $ids . '  where short_description =  "' . $description . '" and id!=' . $ids;
                // $query = $this->db->query($pquery);
            }
            print_r($despro);
        }
    }

    function insertChChar() {
        $menuitems = array('Tomato Soup' => '蕃茄湯', 'Mushroom Soup' => '蘑菇湯', 'Vegetable Soup' => '雜菜湯', 'Dal Soup' => '黃豆蓉湯', 'Sweet Corn Soup' => '粟米湯', 'Rasam Soup' => '南印度香料雜菜湯', 'Idly Vada  (1 Pc Each)' => '蒸米糕炸團（各一件）', 'Vada (2 Pcs)' => '炸團 ( 兩件', 'Idly (2 Pcs)' => '蒸米糕 ( 兩件）', 'Fried Idly' => '煎蒸米糕', 'Special Masala Idly' => '特色瑪沙拉香料蒸米糕', 'Dhahi Idly' => '乳酪蒸米糕', 'Idly Sambar' => '蔬菜燉蒸米糕', 'Idly Rasam' => '酸辣湯蒸米糕', 'Idly Vada Sambar' => '蔬菜燉蒸米糕炸團', 'Idly Vada Rasam' => '酸辣湯蒸米糕炸團', 'Upma' => '燴粗麥', 'Masala Upma' => '瑪沙拉香料燴粗麥',
            'Bonda (3pcs)' => '炸咖哩薯仔球（三件）', 'Pakora Chilly/Onion/Gobi or Mixed' => '印度炸雜菜（青椒/洋蔥/椰菜花/混合）', 'Samosa (3 Pcs)' => '咖哩角（三件）', 'Gobi Manchurian' => '炒椰菜花', 'Chilli panneer' => '辣味茅屋芝士', 'Kurkure Bhindi' => '印式脆炸秋葵', 'Vada Pav Bombay Style（2pcs)' => '炸咖哩薯仔球夾麵包( 兩件）', 'Dahi Vada（2pcs)' => '乳酪甜炸圈', 'Pav Bhaji' => '印式豆蓉配麵包( 兩件）', 'Cheese Pav Bhaji' => '印式芝士豆蓉配麵包', 'Samosa Chat' => '咖哩角配三角豆', 'Sev Puri' => '薯仔絲炸米餅', 'Pani Puri' => '炸米餅配薄荷汁', 'Bhel Puri' => '蕃茄洋蔥炸米粒', 'Dahi Puri' => '乳酪炸米餅',
            'Paneer Pav Masala' => '印式茅屋芝士豆蓉夾麵包', 'Cheese Masala Pav' => '印式芝士豆蓉夾麵包', 'Dahi Batata Puri' => '乳酪薯仔炸米餅', 'Extra Pav' => '麵包', 'DOSA (Pancake made of Rice & Pulses)' => '', 'Plain Dosa' => '原味煎餅',
            'Masala Dosa' => '瑪沙拉香料煎餅', 'Plain Onion Dosa' => '洋蔥煎餅', 'Butter Plain Dosa' => '黃油煎餅', 'Butter Masala Dosa' => '黃油瑪沙拉香料煎餅', 'Ghee Plain Dosa' => '印度酥油煎餅', 'Ghee Masala Dosa' => '印度酥油瑪沙拉香料煎餅', 'Cheese Plain Dosa' => '芝士煎餅', 'Cheese Masala Dosa' => '芝士瑪沙拉香料煎餅', 'Mysore Plain Dosa' => '辣味煎餅', 'Mysore Butter Plain Dosa' => '辣味黃油煎餅', 'Mysore Masala Dosa' => '辣味瑪沙拉香料煎餅', 'Paper Plain Dosa' => '原味薄煎餅', 'Paper Masala Dosa' => '瑪沙拉香料薄煎餅', 'Cheese Paper Plain Dosa' => '芝士薄煎餅',
            'Cheese Paper Masala Dosa' => '芝士瑪沙拉香料薄煎餅', 'Paneer Masala Dosa' => '茅屋芝士瑪沙拉香料薄煎餅', 'Woodlands Special Butter Masala Dosa' => '活蘭特色黃油瑪沙拉香料煎餅', 'Mushroom Masala Dosa' => '蘑菇瑪沙拉香料煎餅', 'Mysore Mushroom Masala Dosa' => '辣味蘑菇瑪沙拉香料煎餅', 'Vegetable Plain Dosa' => '雜菜煎餅', 'Vegetable Masala Dosa' => '雜菜瑪沙拉香料煎餅', 'Kal Dosa Plain 2pcs' => '厚軟煎餅（兩件）', 'SEMOLINA (SOOJI) DOSA' => '', 'Onion Rava Plain Dosa' => '洋蔥粗粒麵粉煎餅', 'Onion Rava Masala Dosa' => '洋蔥瑪沙拉香料粗粒麵粉煎餅',
            'Mysore Rava Plain' => '辣味粗粒麵粉煎餅', 'Mysore Rava Masala' => '辣味瑪沙拉香料粗粒麵粉煎餅', 'Mysore Onion Rava Plain' => '辣味洋蔥粗粒麵粉煎餅', 'Mysore Onion Rava Masala' => '辣味洋蔥瑪沙拉香料粗粒麵粉煎餅', 'Rava Plain Dosa' => '原味粗粒麵粉煎餅', 'Rava Masala Dosa' => '瑪沙拉香料粗粒麵粉煎餅', 'Uttappam Platter (3 Pcs)' => '班戟拼盤（三件）', 'Plain Uttappam' => '原味班戟', 'Ghee Uttappam' => '印度酥油班戟', 'Butter Uttappam' => '黃油班戟', 'Cheese Uttappam' => '芝士班戟', 'Onion Uttappam' => '洋蔥班戟', 'Chilly Uttappam' => '辣味班戟', 'Coconut Uttappam' => '椰子班戟',
            'Mixed Uttappam (Onion,Chilly,Coconut)' => '班戟（洋蔥/辣味/椰子）', 'Madras Taco (3 Pcs)' => '茅屋芝士班戟 （三件）', 'South Indian Thali Poori or Chapathi' => '南印度套餐', 'North Indian Thali Chapathi' => '北印度套餐', 'Woodlands Special Thali Poori or Chapathi' => '活蘭特色套餐', 'Jain Special Thali Poori or Chapathi' => '耆那教素食套餐', 'Plain Boiled Rice' => '白飯', 'Lemon Rice' => '檸檬飯', 'Pepper Rice' => '黑椒飯', 'Coconut Rice' => '椰子飯', 'Tomato Rice' => '蕃茄飯', 'Yoghurt Rice' => '乳酪飯', 'Rasam Rice' => '南印度香料飯', 'Sambar Rice' => '蔬菜燉飯',
            'Dal Rice' => '黃豆蓉飯', 'Jheera Rice' => '香料飯', 'Vegetable Biriyani' => '咖喱雜菜炒飯', 'Vegetable Pulav Rice' => '雜菜炒飯', 'Kashmiri Biriyani' => '咖喱乾果果仁炒飯', 'Mushroom Biriyani' => '咖喱蘑菇炒飯', 'Veg Fried Rice' => '雜菜炒飯', 'Chapathi（3pcs)' => '印度烙餅（三件）', 'Poori (3pcs)' => '印度炸麥包（三件）', 'Ghee Chapathi(3pcs)' => '黃油烙餅（三件）', 'Chapathi Chenna Masala(3pcs)' => '咖哩三角豆烙餅（三件）', 'Chenna Bathura (2pcs)' => '咖哩三角豆炸麵包球（兩件）', 'Bathura (1pc)' => '炸麵包球（一件）', 'Lacha Paratha (1pc)' => '油酥麥餅', 'Chapathi（1pc)' => '印度烙餅（一件）',
            'Dal' => '黃豆蓉咖喱', 'Dal Fry' => '炒黃豆蓉咖喱', 'Dal Makhani' => '濃汁雜豆蓉咖喱', 'Baingan Burtha' => '雜豆茄子菜蓉', 'Bombay Alu' => '咖喱薯仔蓉', 'Tomato Burtha' => '蕃茄蓉咖喱', 'Vegetable Kurma' => '雜菜咖喱', 'Alu Mutter' => '薯仔青豆咖喱', 'Alu Gobi Masala' => '薯仔椰菜花咖喱', 'Alu Simla Mirchi' => '薯仔三色椒咖喱', 'Chenna Masala' => '三角豆咖喱', 'Panneer Masala' => '牛油芝士咖喱', 'Panneer Burji' => '印式香料炒牛油芝士', 'Alu Palak' => '薯仔菠菜蓉咖喱', 'Rajma Masala' => '紅腰豆咖喱', 'Paneer Chenna Masala' => '牛油芝士三角豆咖喱', 'Paneer Butter Masala' => '茅屋芝士牛油咖喱', 'Panneer Makhani' => '濃汁牛油芝士雜豆蓉咖喱',
            'Panneer Palak ' => '牛油芝士菠菜蓉咖喱', 'Palak Masala ' => '菠菜雜豆咖喱', 'Vegetable Kofta ' => '咖喱免治菜球', 'Mutter Palak' => '菠菜青豆咖喱', 'Mushroom Palak' => '菠菜蘑菇咖喱', 'Bhindi Masala ' => '秋葵咖喱', 'Bhaigan Masala' => '茄子咖喱', 'Alu Tomato Masala' => '薯仔蕃茄咖喱', 'Vegetable Makhani' => '濃汁雜菜咖喱', 'Vegetable Kolhapuri' => '雜菜紅咖喱', 'Vegetable Noodles' => '蔬菜麵', 'Fried Noodles' => '炒麵', 'Orange | Apple | Pineapple | Water Melon | Mango | Honey Dew Melon' => '橙汁/蘋果汁/菠蘿汁/西瓜汁/芒果汁', 'Cocktail Juice' => '活蘭特飲', 'Jal Jeera Pani' => '印度香料特飲', 'Jal Jeera Lemon | Soda' => '印度香料檸檬梳打',
            'Fresh Lemon Water' => '印式檸檬水', 'Lemon Soda (Salt | Sweet)' => '檸檬梳打（鹹/甜）', 'Lassi (Sweet | Salt)' => '乳酪（鹹/甜）', 'Mango | Piniapple | Banana Lassi' => '芒果 / 菠蘿乳酪 / 香蕉乳酪', 'Rose Lassi' => '玫瑰乳酪', 'Butter Milk' => '黃油牛奶', 'Milk Shakes (Vanilla | Mango | Chocolate | Strawberry | Pineapple | Banana) ' => ' 奶昔 (雲呢拿 / 芒果 / 朱古力 / 士多啤梨 / 菠蘿 / 香蕉)', 'Dry Fruits & Nuts Milk Shake' => '乾果果仁奶昔', 'Rose Milk' => '玫瑰牛奶', 'Coke | Fanta | Sprite | Soda Water' => '可口可樂/芬達橙汁/雪碧/梳打水', 'Lemon Tea Hot or Cold' => '檸檬茶（熱/凍）', 'Milk Tea (Hot | Cold)' => '奶茶 （熱/凍）', 'Black Tea (Hot | Cold)' => '黑茶（熱/凍）',
            'Herbal Tea' => '香草茶', 'Masala Tea ' => '瑪沙拉印式奶茶', 'Coffee (Hot | Cold)' => '咖啡（熱/凍）', 'Black Coffee (Hot | Cold)' => '黑咖啡（熱/凍）', 'Madras Filter Coffee' => '印度滴漏咖啡', 'Almond Milk (Hot | Cold)' => '杏仁奶（熱/凍）', 'Kesar Milk' => '藏红花牛奶', 'Kesar Badam Milk' => '藏红花杏仁牛奶', 'Ragi Malt' => '小米奶', 'Masala Milk (Hot | Cold)' => '瑪沙拉香料牛奶（熱/凍）', 'Mineral Water (Small | Big)' => '蒸餾水', 'S.Pallegrino - 250 ml' => '汽泡水－250毫升', 'S.Pallegrino - 500 ml' => '汽泡水－500毫升', 'Beer (Non Alcoholic )' => '啤酒（無酒精）', 'Gulab Jamun' => '印式炸奶球配糖漿',
            'Rasgulla' => '印式甜奶球', 'Rasmalai' => '杏仁糖漿甜奶球', 'Woodlands Special Thali Kheer' => '活蘭特色練奶', 'Kulfi Almond Flavored' => '印式雪糕', 'Plain Roasted ' => '原味焗脆薄餅', 'Plain Fried' => '原味炸脆薄餅', 'Masala Roasted' => '蕃茄洋蔥香料焗脆薄餅', 'Masala Fried' => '蕃茄洋蔥香料脆薄餅');
        foreach ($menuitems as $key => $value) {
            echo $key, $value, "<br/>";
            echo $pquery = 'update  products set description = "' . $value . '"  where title =  "' . $key . '"';
            $query = $this->db->query($pquery);
        }
    }

}
