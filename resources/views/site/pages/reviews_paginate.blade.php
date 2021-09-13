{{-- {{dd($reviews)}} --}}
@isset($reviews)
            @foreach ($reviews as $review)
            <div class="col-md-4">
               <div class="client-block text-center">
                  <img src="{{asset('/storage/reviews/'.$review->profile_pic)}}" alt=""
                     class="img-responsive center-block">
                  <div style="padding:10px 10px;">
                     <h4>{{$review->name}}</h4>
                     <p>{{$review->designation}}</p>
                     @if($review->linkedin)
                     <a href="{{$review->linkedin}}" target="_blank">
                     <i
                        class="fab fa-linkedin fa-2x"></i>
                     </a> @endif
                     <span class="rating-star">
                        
                     @if($review->rating)
                     @for ($i = 0; $i < $review->rating; $i++)
                     <span class="fa fa-star "></span>
                     @endfor
                     @php
                         $unstar= 5 - $review->rating;
                     @endphp
                     @for ($i = 0; $i < ($unstar); $i++)
                     <span class="far fa-star"></span>
                     @endfor
                     
                     @endif
                        
                     </span>
                  </div>
               </div>
            </div>
            @endforeach
            <div class="testimonial_links">
               <div class="row">
                  <div class="col-md-4 showing-products">
                    
                  </div>
                  <div class="col-md-12">
                     <div class="pagination" style="float:right; margin-top:20px; display:block!important">
                         {{$reviews->links()}}
                     </div>
                  </div>
               </div>
            </div>           
@endisset
