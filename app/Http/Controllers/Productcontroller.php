<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    private $products = [
        [
            'id' => 1,
            'name' => 'Laptop',
            'description' => 'High-performance laptop',
            'price' => 1500,
            'image' => 'https://media.education.studio7thailand.com/110011/MacBook_Air_13-inch_M2_Space_Gray_1-square_medium.jpg',
        ],
        [
            'id' => 2,
            'name' => 'Smartphone',
            'description' => 'Latest smartphone with great features',
            'price' => 800,
            'image' =>'https://www.istudio.store/cdn/shop/files/iPhone_16_Pro_Max_Black_Titanium_PDP_Image_Position_1a_Black_Titanium_Color__TH-TH.jpg?v=1725927894'
        ],
        [
            'id' => 3,
            'name' => 'Tablet',
            'description' => 'Portable tablet for everyday use',
            'price' => 500,
            'image' =>'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/ipad-air-finish-select-gallery-202405-13inch-blue-wifi?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=SzlUeW5ITUpKK1FKdDdNS0xNUVhmM3hxSU9Rc1hENld5ZlZGbisxZU9hWGJrbFd6ZHBvVk05L3d0WWlJMkh3MEU1V0hVSjZLVHJGenZsOFVicTBNclV1ZnhKeHNGWFhISWx4Q0lTRXA4dkY5Q2drLzhtOFgzejV4MENrZ0JFZVBwak9PMXpaSGlQNVErR3pISzM5NVpB&traceId=1'
        ],
        [
            'id' => 4,
            'name' => 'Gaming Mouse',
            'description' => 'Precision gaming mouse with RGB lighting',
            'price' => 60,
            'image' =>'https://media-cdn.bnn.in.th/231428/Razer-Gaming-Mouse-Basilisk-V3-Pro-1-square_medium.jpg'
        ],
        [
            'id' => 5,
            'name' => 'Mechanical Keyboard',
            'description' => 'Durable mechanical keyboard with tactile switches',
            'price' => 120,
            'image' =>'https://media-cdn.bnn.in.th/150922/Neolution-Gaming-keyboard-01-square_medium.jpg'
        ],
        [
            'id' => 6,
            'name' => 'Monitor',
            'description' => '27-inch 4K UHD monitor with HDR support',
            'price' => 400,
            'image' => 'https://media-cdn.bnn.in.th/407529/DELL-MONITOR-P2425H-IPS-100Hz-1-square_medium.jpg'
        ],
        [
            'id' => 7,
            'name' => 'External Hard Drive',
            'description' => '1TB external hard drive for backup and storage',
            'price' => 70,
            'image' =>'https://i.ebayimg.com/images/g/1pMAAOSwSodlipqb/s-l1200.jpg'
        ],
        [
            'id' => 8,
            'name' => 'Wireless Earbuds',
            'description' => 'True wireless earbuds with noise cancellation',
            'price' => 150,
            'image' =>'https://ca.targus.com/cdn/shop/files/51205_0.jpg?v=1702335009'                                                 
        ],
        [
            'id' => 9,
            'name' => 'Smartwatch',
            'description' => 'Fitness tracking smartwatch with heart rate monitoring',
            'price' => 250,
            'image' =>'https://i5.walmartimages.com/asr/dda6bc1f-d282-4cf9-ad29-e827222bc4d5.8d402328f4d54e2b9a252879ec51fb79.jpeg'

        ],
        [
            'id' => 10,
            'name' => 'Portable Speaker',
            'description' => 'Compact Bluetooth speaker with powerful sound',
            'price' => 90,
            'image' =>'https://i5.walmartimages.com/seo/JBL-Clip-4-Portable-Bluetooth-Waterproof-Speaker-Black_4a62eff8-e60f-4204-aadf-5adeefc89fd1.a5d818ae63e187839d78da92957ce9ff.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF'    
        ],
    ];

    /**
     * Display      a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Products/Index', 
            ['products' => $this->products]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product) {
            abort(404, 'Product not found');
        }

        return Inertia::render('Products/Show', ['product' => $product]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
