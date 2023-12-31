<?php



class Publications extends Controller
{
    private $CategoryModel;
    private $publicationModel;

    public function __construct()
    {
        $this->CategoryModel = $this->model('Category');
        $this->publicationModel = $this->model('Publication');

    }

    public function index()
    {
        echo "all the pub";
    }


    
    public function filter($category = 'all', $city = 'all') {
        switch (true) {
                case ($category == 'all' && $city == 'all'):
                    $pub= $this->publicationModel->allPublications();
                    echo json_encode($pub);
                break;
    
                case ($category != 'all' && $city == 'all'):
                    // die('hello');
                    $cat= $this->publicationModel->filterCategory($category);
                    echo json_encode($cat);
                break;
    
                case ($category == 'all' && $city != 'all'):
                    $cit= $this->publicationModel->filterCity($city);
                    echo json_encode($cit);
                break;
    
                case ($category != 'all' && $city != 'all'):
                   
                    $filterAll= $this->publicationModel->filterCategoryCity($category , $city);
                    echo json_encode($filterAll);
          }
    }

      public function add()
      {
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              for ($i = 0; $i < count($_POST['name']); $i++) {
                  $data = [
                      "name" => $_POST['name'][$i],
                      "category" => $_POST['category'][$i],
                      "desc" => $_POST['desc'][$i],
                      "prix" => $_POST['prix'][$i],
                      "city"=>$_POST['city'][$i],
                      "image" => ""
                  ];

                  if (!empty($_FILES['image']['name'][$i])) {
                      $image = $_FILES['image'];

                      $file_name = time() . '_' . $image['name'][$i];
                      $file_tmp = $image['tmp_name'][$i];
                      $file_destination = APPROOT . '/../public/img/publications/' . $file_name;
                      $data['image'] = $file_name;

                      if (move_uploaded_file($file_tmp, $file_destination)) {
                          $this->publicationModel->addpub($data);
                      } else {
                          die('File upload failed: ' . $image['error'][$i]);
                      }
                  }
              }
              redirect('');
          } else {
           
              $Category = $this->CategoryModel->getCategory();
              $Cities = $this->publicationModel->getCities();

              $data = [
                  'category' => $Category,
                  'cities'=>$Cities,
              ];
              $this->view('users/addpost', $data);
          }
    
      }
      
 }

