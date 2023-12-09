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


    
    public function filter($category, $city) {
        switch (true) {
                case ($category == null && $city == null):  
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

