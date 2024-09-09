<?php


namespace Controller;



class AdController
{
    public \App\Ads $ads;
    public function __construct(){
        $this->ads = new \App\Ads();
    }
    public function show(int $id): void
    {
        /**
         * @var $id
         * @var $ad
         */
        $ad        = $this->ads->getAd($id);
        $ad->image = "../assets/images/ads/$ad->image";

        loadView('single-ad', ['ad' => $ad]);
    }

    public function create(): void
    {
        $branches = (new \App\Branch())->getBranches();
        loadView('dashboard/create-ad', ['branches' => $branches]);
    }

    public function store(): void
    {
        $title       = $_POST['title'];
        $description = $_POST['description'];
        $price       = (float) $_POST['price'];
        $address     = $_POST['address'];
        $rooms       = (int) $_POST['rooms'];

        if ($_POST['title']
            && $_POST['description']
            && $_POST['price']
            && $_POST['address']
            && $_POST['rooms']
        ) {
            // TODO: Replace hardcoded values
            $newAdsId = $this->ads->createAds(
                $title,
                $description,
                (new \App\Session)->getId(),
                1,
                (int)$_POST['branch_id'],
                $address,
                $price,
                $rooms
            );

            if ($newAdsId) {
                $imageHandler = new \App\Image();
                $fileName     = $imageHandler->handleUpload();

                if (!$fileName) {
                    exit('Rasm yuklanmadi!');
                }

                $imageHandler->addImage((int) $newAdsId, $fileName);

                redirect('/');

                exit();
            }

            return;
        }

        echo "Iltimos, barcha maydonlarni to'ldiring!";
    }

    public function edit(int $id): void{
        $branches = (new \App\Branch())->getBranches();
        loadView('dashboard/create-ad', ['ad' => $this->ads->getAd($id), 'branches' => $branches]);
    }

    public function update(int $id):void{
        $ad = new \App\Ads();

        if($_FILES['image']['error']!=4){
            $uploadPath = basePath("/public/assets/images/ads");
            $image = new \App\Image();
            $image_name = $image->getImagesById($id);
            
            unlink($uploadPath.'/'.$image_name->name);
            $newFilename = $image->handleUpload();
            $image->update($image_name->id,$newFilename);
        }

        $price = (float) $_POST['price'];
        $ad->updateAds($id, $_POST['title'], $_POST['description'],(new \App\Session)->getId(),1,$_POST['address'], $price, (int)$_POST['rooms']);
        redirect('/profile');
    }  

    public function delete(int $id):void{
        $this->ads->deleteAds($id);  
        redirect('/profile');
    }

    public function home()
    {
        $ads = (new \App\Ads())->getAds();

        $branches = (new \App\Branch())->getBranches();

        loadView('home', ['ads' => $ads, 'branches' => $branches]);
    }
    public function index(): void{
        $ads = $this->ads->getAds();
        loadView('dashboard/ads', ['ads' => $ads]);
    }

    public function search(){
        $searchPhrase = $_REQUEST['search_phrase'];
        $ads = $this->ads->searchAds($searchPhrase);
        loadView('home', ['ads' => $ads]);
    }

}
