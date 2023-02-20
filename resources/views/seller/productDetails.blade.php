
@extends('layouts.layout.customerLayout')

@section('content')
    @include('layouts.header.header');

    

    <div class="container pb-5">
       
        <div class="row">
            <div class="col-md-6">
                <img src="img/camera.jpg" class="img-fluid rounded" >
            </div>
            <div class="col-md-6"> 
                <div class="row">
                    <div class="col-md-12">
                        <h1>Fujifilm Kamera #09834587</h1>
                    </div>
                </div>     
                <div class="row">
                    <div class="col-md-12">
                        <span class="badge badge-primary">In Stock</span>
                        <span class="product-number">#0435789</span>
                    </div>
                </div>     
                <div class="row mt-2">
                    <div class="col-md-12">
                        <div id="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, facere?
                            Amet id iusto maiores delectus repudiandae veritatis doloremque nobis quidem?
                            Unde earum recusandae explicabo. Deleniti, inventore non? Consequuntur, maiores tenetur.                            
                        </div>
                    </div>
                </div>    
                <div class="row mt-2">
                    <div class="col-md-4">                        
                            <i class="fa fa-star" ></i> <em></em>
                            <i class="fa fa-star" ></i> <em></em>
                            <i class="fa fa-star" ></i> <em></em>
                            <i class="fa fa-star" ></i> <em></em>                                                    
                            <i class="fa fa-star-half-o" ></i> <em></em>   
                            <span class="badge badge-success">53</span>                        
                    </div>
                    <div id="write-review" class="col-md-4">
                        <a href=""> Write a review</a>
                    </div>
                </div>              
                <div class="row mt-2">
                    <div class="col-md-12">
                        <h4 id="product-price" >$120</h4>                        
                    </div>
                </div>    
                <div class="row mt-2">
                    <div class="col-md-12">
                        <button class="btn btn-success">                            
                            <i class="fa fa-cart-plus" aria-hidden="true"></i> 
                            Add To Cart                   
                        </button>
                    </div>
                </div>    
                
            </div>
        
        
        
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="bd-example bd-example-tabs">
                    <nav>
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-description" role="tab" aria-controls="nav-home" aria-selected="true">Description</a>
                        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-payment" role="tab" aria-controls="nav-profile" aria-selected="false">Payment Method</a>
                        <a class="nav-link" id="nav-comment-tab" data-toggle="tab" href="#nav-comment" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</a>
                      </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-home-tab">
                        <p>Placeholder content for the tab panel. This one relates to the home tab. Takes you miles high, so high, 'cause she’s got that one international smile. There's a stranger in my bed, there's a pounding in my head. Oh, no. In another life I would make you stay. ‘Cause I, I’m capable of anything. Suiting up for my crowning battle. Used to steal your parents' liquor and climb to the roof. Tone, tan fit and ready, turn it up cause its gettin' heavy. Her love is like a drug. I guess that I forgot I had a choice.</p>
                      </div>
                      <div class="tab-pane fade" id="nav-payment" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <p>Placeholder content for the tab panel. This one relates to the profile tab. You got the finest architecture. Passport stamps, she's cosmopolitan. Fine, fresh, fierce, we got it on lock. Never planned that one day I'd be losing you. She eats your heart out. Your kiss is cosmic, every move is magic. I mean the ones, I mean like she's the one. Greetings loved ones let's take a journey. Just own the night like the 4th of July! But you'd rather get wasted.</p>
                      </div>
                      <div class="tab-pane fade" id="nav-comment" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <p>Placeholder content for the tab panel. This one relates to the contact tab. Her love is like a drug. All my girls vintage Chanel baby. Got a motel and built a fort out of sheets. 'Cause she's the muse and the artist. (This is how we do) So you wanna play with magic. So just be sure before you give it all to me. I'm walking, I'm walking on air (tonight). Skip the talk, heard it all, time to walk the walk. Catch her if you can. Stinging like a bee I earned my stripes.</p>
                      </div>
                    </div>
                  </div>

            </div>

        </div>
    </div>

    <footer class="footer">
        <div class="container">
          <span class="text-muted">Place sticky footer content here.</span>
        </div>
      </footer>


@endsection