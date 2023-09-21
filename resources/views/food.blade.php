<style>
    /* Main style for the section */
#menu {
    background-color: black;
    margin-top: -1px;
    
}

/* Styling the quantity input */
#addcr {
    border-radius: 50px;
    border: 2px solid #aaa;
    padding: 5px 20px;
    font-size: 15px;
    background-color: #f2f2f2;
    transition: all 0.3s ease;
}

#addcr:focus {
    outline: none;
    border-color: #555; 
    box-shadow: 0 0 8px rgba(85,85,85,0.3);
}

/* Styling the "Add to Cart" button */
#incrd {
    background-color:#f94300;
    border: none;
    color: white;
    padding: 10px 30px;
    border-radius: 50px;
    font-weight: bold;
    font-size: 15px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

#incrd:hover {
    background-color: #ffffff;
    color: #086c17;
    transform: scale(1.05);
    cursor: pointer;
}

/* Spacing between the quantity and the button */
#addcr, #incrd {
    margin: 5px 2px;
}

</style>
<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2 style="color: white">Our selection of cakes with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                @foreach ($data as $data)
                    <form action="{{url('/addcart',$data->id)}}" method="post" class="d-flex align-items-center">
                        @csrf
                        <div class="item">
                            <div style="background-image: url('/foodimage/{{$data->image}}')" class='card' >
                                <div class="price" ><h6>{{$data->price}} DH</h6></div>
                                <div class='info'>
                                    <h1 class='title'>{{$data->title}}</h1>
                                    <p class='description'>{{$data->description}}</p>
                                    <div class="main-text-button">
                                        <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <input type="number" id="addcr" name="quantity" min="1" value="1" class="form-control mr-2" style="width:80px;"> <!-- Bootstrap class added -->
                            <input type="submit" id="incrd" value="Add Cart" class="btn btn-primary"> <!-- Bootstrap class added -->
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->
