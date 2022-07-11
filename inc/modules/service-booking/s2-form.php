<div class="py-5 bg-light mb-2">
    <div class="container px-4 px-xxl-0">
        <div class="row row align-items-sm-center">
            <div class="col-12 col-md-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-no-gutter  mb-0">
                        <li class="breadcrumb-item fw-bold text-uppercase"><a href="/">Home</a></li>
                        <li class="breadcrumb-item text-uppercase active" aria-current="page">Service Booking Step 2</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container p-6 p-xl-8 bg-white shadow w-xl-75">
    <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">
            <div class="mb-3">
                <fieldset id="regLookupForm">
                    <div class="mb-3">
                        <div class="input-group">
                            <input name="regNumber" type="text" value="RJ51 LSN" id="regNumber" class="form-control" placeholder="Your vehicle's registration number" required="">
                            <input type="submit" name="regLookup" value="Find your vehicle" id="regLookup" class="btn btn-primary">
                        </div>
                    </div>
                </fieldset>
            </div>
            <div id="up1" class="mb-3">
            <div id="success">
                    <h2 class="mb-3">
                        FORD
                        FIESTA
                        |
                        2001
                        |
                        1299CC
                        PETROL
                        <!--01/01/0001-->
                    </h2>
                    <div class="mb-3 date-picker">
                        <div class="input-group">
                            <span class="input-group-text bg-brand-secondary">
                                <i class="bi bi-calendar"></i>
                            </span>
                            <input name="preferredDate" type="text" onchange="javascript:setTimeout('__doPostBack(\'preferredDate\',\'\')', 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;" id="preferredDate" class="form-control ignore-read-only flatpickr flatpickr-input" placeholder="Preferred date" required="" readonly="readonly">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-brand-secondary">
                                <i class="bi bi-clock"></i>
                            </span>
                            <select name="preferredTime" id="preferredTime" class="form-control" required="">
                                <option selected="selected" value="0001-01-01 00:00">Preferred time</option>
                                <option value="0001-01-01 08:00">08:00</option>
                                <option value="0001-01-01 08:30">08:30</option>
                                <option value="0001-01-01 09:00">09:00</option>
                                <option value="0001-01-01 09:30">09:30</option>
                                <option value="0001-01-01 10:00">10:00</option>
                                <option value="0001-01-01 10:30">10:30</option>
                                <option value="0001-01-01 11:00">11:00</option>
                                <option value="0001-01-01 11:30">11:30</option>
                                <option value="0001-01-01 12:00">12:00</option>
                                <option value="0001-01-01 12:30">12:30</option>
                                <option value="0001-01-01 13:00">13:00</option>
                                <option value="0001-01-01 13:30">13:30</option>
                                <option value="0001-01-01 14:00">14:00</option>
                                <option value="0001-01-01 14:30">14:30</option>
                                <option value="0001-01-01 15:00">15:00</option>
                                <option value="0001-01-01 15:30">15:30</option>
                                <option value="0001-01-01 16:00">16:00</option>
                                <option value="0001-01-01 16:30">16:30</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input name="mileage" type="text" id="mileage" class="form-control" placeholder="Your vehicle's mileage" required="" min="1">
                    </div>
                    <div id="service-options flex-c">
                        <div class="btn-group mb-3 w-100 flex-c">
                            <!-- Service options: see documentation for details of how to set these up -->
                            <a selected="false" id="o2" class="btn btn-outline-primary service-option w-50" href="javascript:__doPostBack('o2','')">
                                <strong>Minor Service</strong><br>
                                From £109
                            </a>
                            <a selected="false" id="o4" class="btn btn-outline-primary service-option w-50" href="javascript:__doPostBack('o4','')">
                                <strong>Major Service</strong><br>
                                From £159
                            </a>
                        </div>
                        <div class="btn-group mb-3 w-100 flex-c">
                            <a selected="false" id="o5" class="btn btn-outline-primary service-option w-50" href="javascript:__doPostBack('o5','')">
                                <strong>Tyre Check</strong><br>
                                FREE
                            </a>
                            <a selected="false" id="o6" class="btn btn-outline-primary service-option w-50" href="javascript:__doPostBack('o6','')">
                                <strong>MOT</strong><br>
                                £39
                            </a>
                        </div>
                    </div>
                    <input type="hidden" id="optionSelected" name="optionSelected" value="false">
                    <div class="mb-3">
                        <textarea name="additional" rows="5" cols="20" id="additional" class="form-control" placeholder="Tell us any additional information or requirements here"></textarea>
                    </div>
                    <div class="mb-3 text-center">
                        <a id="book" class="btn btn-primary gtm-track--submit_booking" href="javascript:__doPostBack('book','')">Book your service</a>
                    </div>
                </div>
            </div>
            <!-- Default opening hours; see documentation for how to set opening hours -->
            <script type="text/javascript">
                var bssbDateFormat = 'DD/MM/YYYY';
                var bssbTimeFormat = 'HH:mm';
                var bssbStartDate = '2022-07-14';
                var bssbIntervalMinutes = 30;
                var bssbDisabledDays = [0];
                var bssbDisabledDates = ['2022-08-29', '2022-12-26', '2022-12-27', '2023-01-02', '2023-04-07',
                    '2023-04-10', '2023-05-01', '2023-05-29', '2023-08-28', '2023-12-25', '2023-12-26'
                ];
            </script>
        </div>
        <!-- Price Match Promise - Hidden for Now   -->
        <div class="col-12 col-sm-4 col-md-5 d-none">
            <div class="widget">
                <h3>Price match promise</h3>
            </div>
            <div class="widget">
                <h3>Can't be bothered with forms?</h3>
                <p class="tel">
                    Ask questions &amp; book over the phone<br><svg class="svg-inline--fa fa-phone" aria-hidden="true" focusable="false" data-prefix="far" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor" d="M480.3 320.3L382.1 278.2c-21.41-9.281-46.64-3.109-61.2 14.95l-27.44 33.5c-44.78-25.75-82.29-63.25-108-107.1l33.55-27.48c17.91-14.62 24.09-39.7 15.02-61.05L191.7 31.53c-10.16-23.2-35.34-35.86-59.87-30.19l-91.25 21.06C16.7 27.86 0 48.83 0 73.39c0 241.9 196.7 438.6 438.6 438.6c24.56 0 45.53-16.69 50.1-40.53l21.06-91.34C516.4 355.5 503.6 330.3 480.3 320.3zM463.9 369.3l-21.09 91.41c-.4687 1.1-2.109 3.281-4.219 3.281c-215.4 0-390.6-175.2-390.6-390.6c0-2.094 1.297-3.734 3.344-4.203l91.34-21.08c.3125-.0781 .6406-.1094 .9531-.1094c1.734 0 3.359 1.047 4.047 2.609l42.14 98.33c.75 1.766 .25 3.828-1.25 5.062L139.8 193.1c-8.625 7.062-11.25 19.14-6.344 29.14c33.01 67.23 88.26 122.5 155.5 155.5c9.1 4.906 22.09 2.281 29.16-6.344l40.01-48.87c1.109-1.406 3.187-1.938 4.922-1.125l98.26 42.09C463.2 365.2 464.3 367.3 463.9 369.3z">
                        </path>
                    </svg><!-- <i class="far fa-phone"></i> -->
                    <strong></strong>
                </p>
                <div class="break"></div>
                <p class="live-chat">
                    Easy instant online chat with one of our advisors<br><svg class="svg-inline--fa fa-comment" aria-hidden="true" focusable="false" data-prefix="far" data-icon="comment" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor" d="M256 32C114.6 32 .0272 125.1 .0272 240c0 47.63 19.91 91.25 52.91 126.2c-14.88 39.5-45.87 72.88-46.37 73.25c-6.625 7-8.375 17.25-4.625 26C5.818 474.2 14.38 480 24 480c61.5 0 109.1-25.75 139.1-46.25C191.1 442.8 223.3 448 256 448c141.4 0 255.1-93.13 255.1-208S397.4 32 256 32zM256.1 400c-26.75 0-53.12-4.125-78.38-12.12l-22.75-7.125l-19.5 13.75c-14.25 10.12-33.88 21.38-57.5 29c7.375-12.12 14.37-25.75 19.88-40.25l10.62-28l-20.62-21.87C69.82 314.1 48.07 282.2 48.07 240c0-88.25 93.25-160 208-160s208 71.75 208 160S370.8 400 256.1 400z">
                        </path>
                    </svg><!-- <i class="far fa-comment"></i> -->
                    <strong>Live Chat</strong>
                </p>
            </div>
        </div>
        <!-- Price Match Promise - Hidden for Now   -->
    </div>
</div>