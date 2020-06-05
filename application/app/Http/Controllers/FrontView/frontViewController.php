<?php

namespace App\Http\Controllers\FrontView;
use App\Division;
use App\Http\Controllers\Controller;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;

class frontViewController extends Controller

{


    public function index(){
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $sliders1=Slider::where('slider','slider1')->limit(1)->get();
        $sliders2=Slider::where('slider','slider2')->limit(1)->get();
        $sliders3=Slider::where('slider','slider3')->limit(1)->get();
        $sliders4=Slider::where('slider','slider4')->limit(1)->get();
        $sliders5=Slider::where('slider','slider5')->limit(1)->get();
        $sliders6=Slider::where('slider','slider6')->limit(1)->get();
        $sliders7=Slider::where('slider','slider7')->limit(1)->get();
        $sliders8=Slider::where('slider','slider8')->limit(1)->get();
        $messages1=Slider::where('slider','message1')->limit(1)->get();
        $messages2=Slider::where('slider','message2')->limit(1)->get();
        $carousels1=Slider::where('slider','carousel1')->limit(1)->get();
        $carousels2=Slider::where('slider','carousel2')->limit(1)->get();
        $carousels3=Slider::where('slider','carousel3')->limit(1)->get();
        $carousels4=Slider::where('slider','carousel4')->limit(1)->get();
    	return view('front.home')->with(array(
            'logos'=>$logos,
            'sliders1'=>$sliders1,
            'sliders2'=>$sliders2,
            'sliders3'=>$sliders3,
            'sliders4'=>$sliders4,
    	    'sliders5'=>$sliders5,
    	    'sliders6'=>$sliders6,
    	    'sliders7'=>$sliders7,
    	    'sliders8'=>$sliders8,
            'messages1'=>$messages1,
            'messages2'=>$messages2,
            'carousels1'=>$carousels1,
            'carousels2'=>$carousels2,
            'carousels3'=>$carousels3,
            'carousels4'=>$carousels4,
            
            ));
    }

    public function company_profile(){
        $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','companyprofile')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','companyprofile')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','companyprofile')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $company_details=Division::where('divisionType','company-details')->get();
        $company_info=Division::where('divisionType','company-info')->get();
        return view('front.pages.company_profile')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'company_details'=>$company_details,
            'company_info'=>$company_info,
            ));
    }
    public function all_division(){
        $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','all_division')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','all_division')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','all_division')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Division::where('divisionType','all_division')->get();
    	return view('front.pages.all_division')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            
            ));
    }

    public function management(){
        $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','management')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','management')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','management')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Division::where('divisionType','management')->get();
    	return view('front.pages.management')->with(
            array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));
    }

    public function our_bankers(){
        $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','ourbankers')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','ourbankers')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','ourbankers')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Division::where('divisionType','ourbankers')->get();
    	return view('front.pages.our_bankers')->with(
            array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));
    } 

    public function particulars(){
        $pagesliders1=Slider::where('slider','pageslider1')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Division::where('divisionType','particulars')->get();
    	return view('front.pages.particulars')->with(
            array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));
    }

     public function contact_us(){
        $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','contactus')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','contactus')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','contactus')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Division::where('divisionType','contactus')->limit(1)->get();
        return view('front.pages.contact_us')->with(
            array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));
    }

    public function our_products(){
        $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','ourproduct')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','ourproduct')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','ourproduct')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $ourproducts=Division::where('divisionType','our_products')->limit(1)->get();
        $productcapacity=Division::where('divisionType','production_capacity')->limit(1)->get();
    	return view('front.pages.our_products')->with(
            array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'ourproducts'=>$ourproducts,
            'productcapacity'=>$productcapacity,
            ));
    }

    public function valued_customer(){
        $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','valued_customer')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','valued_customer')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','valued_customer')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Division::where('divisionType','valued_customer')->get();
    	return view('front.pages.our_valued_customer')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));
    }
    public function certificate(){
        $pagesliders1=Slider::where('slider','pageslider1')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Division::where('divisionType','certificate')->get();
    	return view('front.pages.certificate')->with(
            array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));
    }
    

    // Sub pages products

     public function tshirt(){
        $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','tshirt')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','tshirt')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','tshirt')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Product::where('productType','tshirt')->get();

    	return view('front.pages.sub_pages.tshirt')->with(
            array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));
    } 

    public function polo_tshirt(){
        $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','poloshirt')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','poloshirt')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','poloshirt')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Product::where('productType','polo-shirt')->get();
    	return view('front.pages.sub_pages.polo_tshirt')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));
    } 

    public function kids_item(){
        $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','kidsitem')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','kidsitem')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','kidsitem')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Product::where('productType','kids-item')->get();
    	return view('front.pages.sub_pages.kids_item')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));
    }
    public function jacket(){
        $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','jacket')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','jacket')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','jacket')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Product::where('productType','jacket')->get();
    	return view('front.pages.sub_pages.jacket')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));
    }
    public function trouser(){
        $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','trouser')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','trouser')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','trouser')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Product::where('productType','trouser')->get();
    	return view('front.pages.sub_pages.trouser')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));
    }
    public function ladies_item(){
        $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','ladiesitem')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','ladiesitem')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','ladiesitem')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Product::where('productType','ladies-item')->get();
    	return view('front.pages.sub_pages.ladies_item')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));
    }

    public function tank_top(){
        $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','tanktop')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','tanktop')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','tanktop')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Product::where('productType','tank-top')->get();
    	return view('front.pages.sub_pages.tank_top')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));
    }

//=================All division Function========================

    public function knitting(){
        $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','knitting')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','knitting')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','knitting')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Division::where('divisionType','knitting')->get();
    	return view('front.pages.all_division.knitting')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));
    }
    public function sewing_and_finishing(){
        $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','sewing')->where('sliderpage','sewing')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','sewing')->where('sliderpage','sewing')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','sewing')->where('sliderpage','sewing')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Division::where('divisionType','sewing')->get();
    	return view('front.pages.all_division.sewing_n_finishing')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));
    }
    public function dyeing(){
        $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','dyeing')->where('sliderpage','dyeing')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','dyeing')->where('sliderpage','dyeing')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','dyeing')->where('sliderpage','dyeing')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Division::where('divisionType','dyeing')->get();
    	return view('front.pages.all_division.dyeing')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));
    }
    
    public function embroidery(){
        $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','embroidery')->where('sliderpage','embroidery')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','embroidery')->where('sliderpage','embroidery')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','embroidery')->where('sliderpage','embroidery')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Division::where('divisionType','embroidery')->get();
    	return view('front.pages.all_division.embroidery')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));
    }

    public function printing(){
        $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','printing')->where('sliderpage','printing')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','printing')->where('sliderpage','printing')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','printing')->where('sliderpage','printing')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Division::where('divisionType','printing')->get();
        return view('front.pages.all_division.printing')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));
    }


public function cutting(){
 $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','cutting')->where('sliderpage','cutting')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','cutting')->where('sliderpage','cutting')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','cutting')->where('sliderpage','cutting')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Division::where('divisionType','cutting')->get();
        return view('front.pages.all_division.cutting')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));   
}
public function carton(){
 $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','carton')->where('sliderpage','carton')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','carton')->where('sliderpage','carton')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','carton')->where('sliderpage','carton')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Division::where('divisionType','carton')->get();
        return view('front.pages.all_division.carton')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));   
}
public function accessories(){
 $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','accessories')->where('sliderpage','accessories')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','accessories')->where('sliderpage','accessories')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','accessories')->where('sliderpage','accessories')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Division::where('divisionType','accessories')->get();
        return view('front.pages.all_division.accessories')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));   
}
public function sublimation_label(){
 $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','sublimation_label')->where('sliderpage','sublimation_label')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','sublimation_label')->where('sliderpage','sublimation_label')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','sublimation_label')->where('sliderpage','sublimation_label')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Division::where('divisionType','sublimation_label')->get();
        return view('front.pages.all_division.sublimation_label')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));   
}

 public function all_over_printing(){
        $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','alloverprinting')->where('sliderpage','alloverprinting')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','alloverprinting')->where('sliderpage','alloverprinting')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','alloverprinting')->where('sliderpage','alloverprinting')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Division::where('divisionType','our_all_over_printing')->get();
        return view('front.pages.alloverprinting')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));
    }

//==================General Pages Function===============================
   


    public function sister_concern(){
        $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','sisterconcern')->where('sliderpage','sisterconcern')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','sisterconcern')->where('sliderpage','sisterconcern')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','sisterconcern')->where('sliderpage','sisterconcern')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Division::where('divisionType','sisterconcern')->get();
        return view('front.pages.sister_concern')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));
    }

    public function compliance(){
       $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','compliance')->where('sliderpage','compliance')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','compliance')->where('sliderpage','compliance')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','compliance')->where('sliderpage','compliance')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Division::where('divisionType','compliance')->get();
        return view('front.pages.compliance')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));   
    }

     public function go_practice(){
       $pagesliders1=Slider::where('slider','pageslider1')->where('sliderpage','go_practice')->where('sliderpage','go_practice')->limit(1)->get();
        $pagesliders2=Slider::where('slider','pageslider2')->where('sliderpage','go_practice')->where('sliderpage','go_practice')->limit(1)->get();
        $pagesliders3=Slider::where('slider','pageslider3')->where('sliderpage','go_practice')->where('sliderpage','go_practice')->limit(1)->get();
        $logos=Slider::where('slider','logo')->limit(1)->get();
        $products=Division::where('divisionType','go_practice')->get();
        return view('front.pages.go_practice')->with(array(
            'logos'=>$logos,
            'pagesliders1'=>$pagesliders1,
            'pagesliders2'=>$pagesliders2,
            'pagesliders3'=>$pagesliders3,
            'products'=>$products,
            ));   
    }
}
