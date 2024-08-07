@extends('layouts.app')

@section('title')
    About Dr Mostafa
@endsection

@section('content')
    <div class="st-content">
        <div class="st-page-heading st-dynamic-bg" data-src="{{secure_asset('assets/img/op.jpg')}}">
            <div class="container">
                <div class="st-page-heading-in text-center">
                    @if (app()->getLocale() == 'ar')
                    <h1 class="st-page-heading-title">عن <br> د. مصطفى محمود</h1>
                      @else
                      <h1 class="st-page-heading-title">About <br>Dr Mostafa</h1>
                      @endif
                    
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="st-post-details st-style1">
                        <ul>
                            <li>Bachelor degree of Medicine and Surgery, Cairo University.</li>
                            <li>M.Sc. and MD of Orthopedics – Cairo University.</li>
                            <li>&nbsp;Professor of Orthopedics – Cairo University.</li>
                            <li>European Board of Hand Surgery.</li>
                            <li>Member of the American Society for Surgery of the Hand(ASSH).</li>
                            <li>Consultant of Hand Surgery and Microscopic Surgeries.</li>
                            <li>A member of the Royal College of Surgeons (FRCS).</li>
                            <li>A member of the Egyptian Orthopedic Association (EOA).</li>
                            <li>A member of the Egyptian Society for Surgery of the Hand &amp; Microsurgery (ESSHM).</li>
                            <li>A member of the International Federation of Societies for Surgery of the Hand (IFSSH).</li>
                            <li>A member in the American Orthopedic Society for the treatment of injuries and internal fixation of the hand (AOAA).</li>
                        </ul>
                        <blockquote><small>Professor Mostafa Mahmoud was born in Maadi, cairo city and is a graduate of Cairo
                                University.
                                He
                                received his MD degree from Kasr Al-Ainy Medical School - Cairo University in 2008. His residency and
                                training were at Kasr Al-Ainy Hospitals in Orthopedic surgery Department. </small></blockquote>
                        <blockquote><small>Professor Mahmoud has over 35 years’ experience in orthopedics, with special interest in
                                Hand,
                                Upper Limb
                                and Microsurgery. He is an orthopedic surgeon in the Hand, Upper Limb and Microsurgery Unit, and the
                                Orthopedic Trauma and Emergency Unit, Kasr Al Ainy, Cairo University hospital.</small></blockquote>
                        <img class="st-zoom-in" src="{{secure_asset('assets/img/aboutmm.jpg')}}" alt="blog1">
                        <div class="st-post-info">
                            <div class="st-post-text">
                                <blockquote><small>In addition to his surgical practice, he is a professor of Orthopedics and Hand
                                        Surgery, Cairo
                                        University and offers consultative services to the Hand, Upper Limb, Peripheral Nerve and
                                        Microsurgery
                                        Unit at Kasr Al Ainy, Cairo University hospital. Professor Mahmoud is a member of the Surgical Royal
                                        Colleges of Great Britain and Ireland (MRCS), Faculty member of the AO Trauma association, Board
                                        member of the Egyptian Society for Surgery of the Hand and Microsurgery (ESSHM), Member of American
                                        Society for Surgery of the Hand (ASSH) and Fellow of The European Board of Hand Surgery
                                        (FEBHS).</small></blockquote>
                                <blockquote><small>Prof Mahmoud has professional expertise in microscopic repair of the peripheral
                                        nerves, nerve
                                        grafting and transfers as well as brachial plexus injuries in children and adults. He is best known
                                        for his most advanced arthroscopic and microscopic techniques and latest modalities of percutaneous
                                        techniques in healing wrist injuries including scaphoid, carpal bones, distal radius fractures,
                                        intercarpal ligaments and TFCC tears. He is also an expert in the treatment of patients with hand
                                        tumors. Treatment usually includes excising tumors and using surgical magnification and
                                        microsurgical
                                        techniques to ensure complete eradication and functional protection as well as reduce the risk of
                                        recurrence. His practice equally focuses on the treatment of the comminuted fractures of the upper
                                        limb using the advanced anatomical plates and screws that have the best biomechanics properties. He
                                        performs all procedures for elbow and shoulder to repair injuries such as the TFCC, SLL, elbow
                                        ligaments, biceps tendon, rotators cuff.</small></blockquote>


                                <blockquote><small>Professor Mahmoud is devoted to the treatment of birth injuries that affect the
                                        nerves (brachial
                                        plexus birth injury), babies born with deformities, defects (congenital hand anomalies and
                                        Arthrogryposis) and sequelae of brain insult (CP) that affect upper limbs. With the goal of
                                        restoring
                                        the highest level of function.
                                        Professor Mahmoud also treats a wide range of sports related injuries and supervises early
                                        rehabilitation.</small></blockquote>

                                <blockquote><small>Typical injuries include dorsal wrist impingement, TFCC ligament injuries, elbow
                                        osteochondritis
                                        ossificans (OCD), Shoulder impingement, rotator cuff tear and arthroscopic assisted reduction of
                                        fractures.

                                        He performs microsurgical reconstruction of soft tissue defects, bony defects and non-unions by free
                                        tissue transfer techniques. Deformity corrections due to trauma or burn.

                                        He performs Fixation of Shoulder fractures of the proximal humerus, clavicle and scapula, Shoulder
                                        replacement surgeries for irreparable fractures and Tendon transfers around the shoulder.</small>
                                </blockquote>
                                <h2>Digital nerve repair</h2>
                                <div class="col-xl-auto wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s"
                                     style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInRight;">
                                    <div class="st-video-block st-style1 st-zoom">


                                        <div class="st-video-block-img st-zoom-in st-dynamic-bg" data-src="{{secure_asset('assets/img/aboutend.jpg')}}"
                                             style="background-image: url({{secure_asset('assets/img/video-block-img.jpg')}}"></div>
                                        <a href="file.mp4" class="st-play-btn st-style1 st-video-open">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 x="0px" y="0px" viewBox="0 0 336 336" xml:space="preserve">
                    <g>
                        <path
                            d="M286.8,49.2C256.4,18.8,214.4,0,168,0C121.6,0,79.6,18.8,49.2,49.2C18.8,79.6,0,121.6,0,168c0,46.4,18.8,88.4,49.2,118.8
                        C79.6,317.2,121.6,336,168,336c46.4,0,88.4-18.8,118.8-49.2C317.2,256.4,336,214.4,336,168C336,121.6,317.2,79.6,286.8,49.2z
                         M272.4,272.4c-26.8,26.8-63.6,43.2-104.4,43.2s-77.6-16.4-104.4-43.2C37.2,245.6,20.4,208.8,20.4,168S36.8,90.4,63.6,63.6
                        C90.4,36.8,127.2,20.4,168,20.4s77.6,16.4,104.4,43.2c26.8,26.8,43.2,63.6,43.2,104.4S298.8,245.6,272.4,272.4z">
                        </path>
                    </g>
                                                <g>
                                                    <path d="M261.2,156c-0.8-0.8-2-2.4-3.2-4c-0.4-0.4-0.4-0.4-0.8-0.8c-1.2-1.2-2.4-2-4-2.8l-59.2-34c0,0-0.4,0-0.4-0.4L134,79.6
                        c-5.2-3.2-11.2-3.6-16.8-2.4c-5.6,1.6-10.4,5.2-13.6,10.4c-1.2,1.6-1.6,3.6-2.4,5.2c-0.4,1.2-0.4,2.8-0.8,4.4c0,0.4,0,1.2,0,1.6
                        V168v68.8c0,6,2.4,11.6,6.4,15.6s9.6,6.4,15.6,6.4c2,0,4.4-0.4,6.4-1.2s4-1.6,5.6-2.8l58.8-34l0.8-0.4l59.2-34
                        c0.4,0,0.4-0.4,0.8-0.4c4.8-3.2,8.4-8,9.6-13.2C265.2,167.2,264.4,161.2,261.2,156z M244,168.4c0,0.4-0.4,0.8-0.8,0.8h-0.4
                        L184,203.6l-0.4,0.4l-58.8,34c-0.4,0-0.4,0.4-0.8,0.4c0,0-0.4,0-0.4,0.4h-0.4c-0.4,0-0.8-0.4-1.2-0.4c-0.4-0.4-0.4-0.8-0.4-1.2
                        V168V99.2v-0.4v-0.4c0.4-0.4,0.8-0.8,1.2-0.8c0.4,0,0.8,0,1.2,0l59.2,34l0.4,0.4l59.6,34.4l0.4,0.4l0.4,0.4
                        C244,167.6,244,168,244,168.4z"></path>
                                                </g>
                  </svg>
                                            <span class="st-video-animaiton"><span></span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="st-height-b30 st-height-lg-b40"></div>
                    <div class="st-widget st-sidebar-widget">
                        <h3 class="st-widget-title">Dr Mostafa Recent Blogs</h3>
                        <ul class="st-post-widget-list st-mp0">
                            <li>
                                <div class="st-post st-style1">
                                    <a href="#" class="st-post-thumb st-zoom"><img src="{{secure_asset('assets/img/rs-post1.jpg')}}" alt="post1"
                                                                                   class="st-zoom-in"></a>
                                    <div class="st-post-info">
                                        <h2 class="st-post-title"><a href="comingsoon.html">Top Medical Tourism
                                                Destination...</a></h2>
                                        <div class="st-post-date">Jan 22, 2024</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="st-post st-style1">
                                    <a href="#" class="st-post-thumb st-zoom"><img src="{{secure_asset('assets/img/rs-post2.jpg')}}" alt="post2"
                                                                                   class="st-zoom-in"></a>
                                    <div class="st-post-info">
                                        <h2 class="st-post-title"><a href="comingsoon.html">Overview Malaysia as a medical
                                                tourism...</a></h2>
                                        <div class="st-post-date">Jan 15, 2024</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="st-post st-style1">
                                    <a href="#" class="st-post-thumb st-zoom"><img src="{{secure_asset('assets/img/rs-post3.jpg')}}" alt="post2"
                                                                                   class="st-zoom-in"></a>
                                    <div class="st-post-info">
                                        <h2 class="st-post-title"><a href="comingsoon.html">World Parkinson’s Day
                                                comes...</a></h2>
                                        <div class="st-post-date">Jan 05, 2024</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
    </div>
@endsection
