 <div class="getIn__touch section-padding" data-background="images/getInTouch.png">
     <img class="getIn__touch-shape left-right-animate2" src="images/getInTouch.png" alt="">
     <div class="container">
         <div class="row">
             <div class="col-xl-6 col-lg-5 lg-mb-30">
                 <div class="getIn__touch-left" id="contact">
                     <div class="getIn__touch-left-title">
                         <span class="subtitle-one">Get In Touch</span>
                         <h2>Contact Us</h2>
                         @if (Session::has('message'))
                             <p class="alert alert-info">{{ Session::get('message') }}</p>
                         @endif
                     </div>
                     <div class="getIn__touch-left-form">
                         <form action="{{ route('contacts.store') }}" method="post">
                             @csrf
                             <div class="mt-25">
                                 <input type="text" name="name" placeholder="Full Name" required="required">
                                 @error('name')
                                     <div class="error">{{ $message }}</div>
                                 @enderror
                             </div>
                             <div class="mt-25">
                                 <input type="email" name="email" placeholder="Email Address" required="required">
                                 @error('email')
                                     <div class="error">{{ $message }}</div>
                                 @enderror
                             </div>
                             <div class="mt-25">
                                 <input type="text" name="subject" placeholder="Subject" required="required">
                                 @error('subject')
                                     <div class="error">{{ $message }}</div>
                                 @enderror
                             </div>
                             <div class="mt-25">
                                 <textarea name="message" placeholder="Message"></textarea>
                                 @error('message')
                                     <div class="error text-danger">{{ $message }}</div>
                                 @enderror
                             </div>

                             <div class="mt-25">
                                 <button class="btn-one" type="submit" name="submit" value="Submit">Submit</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
             <div class="col-xl-6 col-lg-7">
                 <div class="getIn__touch-right">
                     <div class="getIn__touch-right-title">
                         <h2>Contact Us</h2>
                         <p>Hi there, We are available 24/7 by e-mail or by phone. Drop us line so we can talk further
                             about that.</p>
                         <p>For more info or inquiry about us please feel free to get in touch with us.</p>
                     </div>
                     <div class="getIn__touch-right-bottom">
                         <div class="getIn__touch-right-bottom-text">
                             <h4>client satisfaction in the globaly</h4>
                         </div>
                         <div class="getIn__touch-right-bottom-shape">
                             <img src="images/getInTouch.png" alt="">
                         </div>
                         <div class="getIn__touch-right-bottom-image">
                             <ul>
                                 <li><img src="images/avatar-1.jpg" alt=""></li>
                                 <li><img src="images/avatar-2.jpg" alt=""></li>
                                 <li><img src="images/avatar-5.jpg" alt=""></li>
                                 <li><img src="images/avatar-4.jpg" alt=""></li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
