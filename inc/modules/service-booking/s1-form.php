<div class="py-5 bg-light mb-2">
    <div class="container px-4 px-xxl-0">
        <div class="row row align-items-sm-center">
            <div class="col-12 col-md-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-no-gutter  mb-0">
                        <li class="breadcrumb-item fw-bold text-uppercase"><a href="/">Home</a></li>
                        <li class="breadcrumb-item text-uppercase active" aria-current="page">Service Booking</li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>

    <div class="container p-6 p-xl-8 bg-white shadow w-xl-75">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <fieldset id="service-booking-form-1" class="service-booking">
                    <div class="mb-3 form-floating">
                        <!-- if your website is single-dealer, remove the next line; for franchises, use DealerIdsToInclude and DealerIdsToExclude to tailor the dropdown list -->
                        <select name="dealerid" id="dealerid" class="form-select" required="">
                            <option selected="selected" value="-1">Where would you like to have your service?</option>
                            <option value="196">Gravells Accident Repair Centre</option>
                            <option value="4013">Gravells Kia Abergavenny</option>
                            <option value="571">Gravells Kia Bridgend</option>
                            <option value="242">Gravells Kia Fforestfach</option>
                            <option value="8210">Gravells Kia Hereford</option>
                            <option value="6053">Gravells Kia Kidwelly </option>
                            <option value="241">Gravells Kia Narberth </option>
                            <option value="5462">Gravells Kia Swansea</option>
                            <option value="7429">Gravells Parts Shop </option>
                            <option value="194">Gravells Renault and Dacia Kidwelly </option>
                            <option value="5921">Gravells SEAT Kidwelly </option>
                        </select>
                        <label for="dealerid">Dealer</label>
                        <div class="invalid-feedback">
                            Please Choose a dealership
                        </div>
                    </div>
                    <div class="mb-3 form-floating">
                        <!-- if your website is single-dealer, remove the next line; for franchises, use DealerIdsToInclude and DealerIdsToExclude to tailor the dropdown list -->
                        <input name="firstname" type="text" id="firstname" class="form-control"
                            placeholder="Your first name" required="">
                        <label for="firstname">First name</label>
                        <div class="invalid-feedback">
                            Please enter a valid first name
                        </div>
                    </div>
                    <div class="mb-3 form-floating">
                        <input name="lastname" type="text" id="lastname" class="form-control"
                            placeholder="Your last name" required="">
                        <label for="firstname">Last Name</label>
                        <div class="invalid-feedback">
                            Please enter a valid surname
                        </div>
                    </div>
                    <div class="mb-3 form-floating">
                        <input name="email" id="email" class="form-control" placeholder="Your email address" required=""
                            type="email" pattern="^[a-zA-Z0-9._+-]+@[a-zA-Z0-9._+-]+[\.{1}]+[a-zA-Z0-9_+-]+$">
                        <label for="firstname">Email</label>
                        <div class="invalid-feedback">
                            Please enter a valid email
                        </div>
                    </div>
                    <div class="mb-3 form-floating">
                        <input name="tel" type="text" id="tel" class="form-control" placeholder="Your telephone number"
                            required="">
                        <label for="firstname">Telephone</label>
                        <div class="invalid-feedback">
                            Please enter a valid telephone number
                        </div>
                    </div>
                    <div class="form__submit flex-c gap-4 py-4">
                        <a id="callback" class="btn btn-outline-primary gtm-track--submit_callback"
                            href="javascript:__doPostBack('callback','')">Let us call you!
                            <!-- if your website is single-dealer, add DealerID="123" to the next line -->
                        </a>
                        <span class="text-center">OR</span>
                        <input type="submit" name="next" value="Book your service online" id="next"
                            class="btn btn-primary gtm-track--submit_booking">
                    </div>
                </fieldset>
            </div>
            <!-- Price Match Promise - Hidden for Now   -->
            <div class="col-12 col-sm-4 col-md-5 d-none">
                <div class="widget">
                    <h3>Price match promise</h3>
                </div>
                <div class="widget">
                    <h3>Can't be bothered with forms?</h3>
                    <p class="tel">
                        Ask questions &amp; book over the phone<br><svg class="svg-inline--fa fa-phone"
                            aria-hidden="true" focusable="false" data-prefix="far" data-icon="phone" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M480.3 320.3L382.1 278.2c-21.41-9.281-46.64-3.109-61.2 14.95l-27.44 33.5c-44.78-25.75-82.29-63.25-108-107.1l33.55-27.48c17.91-14.62 24.09-39.7 15.02-61.05L191.7 31.53c-10.16-23.2-35.34-35.86-59.87-30.19l-91.25 21.06C16.7 27.86 0 48.83 0 73.39c0 241.9 196.7 438.6 438.6 438.6c24.56 0 45.53-16.69 50.1-40.53l21.06-91.34C516.4 355.5 503.6 330.3 480.3 320.3zM463.9 369.3l-21.09 91.41c-.4687 1.1-2.109 3.281-4.219 3.281c-215.4 0-390.6-175.2-390.6-390.6c0-2.094 1.297-3.734 3.344-4.203l91.34-21.08c.3125-.0781 .6406-.1094 .9531-.1094c1.734 0 3.359 1.047 4.047 2.609l42.14 98.33c.75 1.766 .25 3.828-1.25 5.062L139.8 193.1c-8.625 7.062-11.25 19.14-6.344 29.14c33.01 67.23 88.26 122.5 155.5 155.5c9.1 4.906 22.09 2.281 29.16-6.344l40.01-48.87c1.109-1.406 3.187-1.938 4.922-1.125l98.26 42.09C463.2 365.2 464.3 367.3 463.9 369.3z">
                            </path>
                        </svg><!-- <i class="far fa-phone"></i> -->
                        <strong></strong>
                    </p>
                    <div class="break"></div>
                    <p class="live-chat">
                        Easy instant online chat with one of our advisors<br><svg class="svg-inline--fa fa-comment"
                            aria-hidden="true" focusable="false" data-prefix="far" data-icon="comment" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M256 32C114.6 32 .0272 125.1 .0272 240c0 47.63 19.91 91.25 52.91 126.2c-14.88 39.5-45.87 72.88-46.37 73.25c-6.625 7-8.375 17.25-4.625 26C5.818 474.2 14.38 480 24 480c61.5 0 109.1-25.75 139.1-46.25C191.1 442.8 223.3 448 256 448c141.4 0 255.1-93.13 255.1-208S397.4 32 256 32zM256.1 400c-26.75 0-53.12-4.125-78.38-12.12l-22.75-7.125l-19.5 13.75c-14.25 10.12-33.88 21.38-57.5 29c7.375-12.12 14.37-25.75 19.88-40.25l10.62-28l-20.62-21.87C69.82 314.1 48.07 282.2 48.07 240c0-88.25 93.25-160 208-160s208 71.75 208 160S370.8 400 256.1 400z">
                            </path>
                        </svg><!-- <i class="far fa-comment"></i> -->
                        <strong>Live Chat</strong>
                    </p>
                </div>
            </div>
            <!-- Price Match Promise - Hidden for Now   -->
        </div>
    </div>
</div>