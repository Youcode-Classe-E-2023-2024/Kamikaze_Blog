<?php

class Publications extends Controller
{
    private $CategoryModel;
    private $PublicationModel;

    public function __construct()
    {
        $this->CategoryModel = $this->model('Category');
        $this->PublicationModel = $this->model('Publication');
    }

    public function index()
    {
        echo "all the pub";
    }


    public function filter($category = null, $city = null)
    {
        switch (true) {
            case ($category == null && $city == null):
                echo 'Displaying all publications';
                break;

            case ($category != 'all' && $city == 'all'):
                echo "Filtering by category: $category";
                break;

            case ($category == 'all' && $city != 'all'):
                echo "Filtering by city: $city";
                break;

            case ($category != 'all' && $city != 'all'):
                echo "Filtering by category: $category and city: $city";
                break;

            default:
                echo 'Displaying all publications';
        }
    }
    // public function add()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         for ($i = 0; $i < count($_POST['name']); $i++) {
    //             $data = [
    //                 "name" => $_POST['name'][$i],
    //                 "category" => $_POST['category'][$i],
    //                 "desc" => $_POST['desc'][$i],
    //                 "prix" => $_POST['prix'][$i],
    //                 "image" => ""
    //             ];

    //             if (!empty($_FILES['image']['name'])) {
    //                 $image = $_FILES['image'];

    //                 for ($i = 0; $i < count($image['name']); $i++) {
    //                     $file_name = time() . '_' . $image['name'][$i];
    //                     $file_tmp = $image['tmp_name'][$i];
    //                     $file_destination = 'C://xampp//htdocs//Kamikaze_Blog//public//img//publications//' . $file_name;
    //                     $data['image'] = $file_name;

    //                     if (move_uploaded_file($file_tmp, $file_destination)) {
    //                        return $this->PublicationModel->addpub($data);
                              
                           
                            

    //                     } else {
    //                         die('File upload failed: ' . $image['error'][$i]);
    //                     }
    //                 }
    //             }
    //         }
    //         die('200');
    //     } else {
    //         $Category = $this->CategoryModel->getCategory();
    //         $data = [
    //             'category' => $Category
    //         ];
    //         $this->view('users/addpost', $data);
    //     }
    // }

public function add()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        for ($i = 0; $i < count($_POST['name']); $i++) {
            $data = [
                "name" => $_POST['name'][$i],
                "category" => $_POST['category'][$i],
                "desc" => $_POST['desc'][$i],
                "prix" => $_POST['prix'][$i],
                "image" => ""
            ];

            if (!empty($_FILES['image']['name'][$i])) {
                $image = $_FILES['image'];

                $file_name = time() . '_' . $image['name'][$i];
                $file_tmp = $image['tmp_name'][$i];
                $file_destination = 'C://xampp//htdocs//Kamikaze_Blog//public//img//publications//' . $file_name;
                $data['image'] = $file_name;

                if (move_uploaded_file($file_tmp, $file_destination)) {
                    $this->PublicationModel->addpub($data);
                } else {
                    die('File upload failed: ' . $image['error'][$i]);
                }
            }
        }
        die('200');
    } else {
        $Category = $this->CategoryModel->getCategory();
        $data = [
            'category' => $Category
        ];
        $this->view('users/addpost', $data);
    }
}
}
