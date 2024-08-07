@extends('layouts.app')

@section('title')
    FAQ
@endsection
@section('styles')
    <style>
        .card-header button {
            text-decoration: none !important;
        }
    </style>
@endsection
@section('content')
    <div class="st-content" >
        <div class="st-page-heading  st-size-md" style="background-color: #3578f3;">
            <div class="container">
                <div class="st-page-heading-in text-center">
                    <h1 class="st-page-heading-title">FAQ</h1>
                </div>
            </div>
        </div>
        <div class="pagination st-style2 st-hidden"></div>
        <div class="swipe-arrow st-style2">
            <div class="slick-arrow-left"><i class="fa fa-chevron-left"></i></div>
            <div class="slick-arrow-right"><i class="fa fa-chevron-right"></i></div>
        </div>
        <section class="faq-area-section">
            <div class="container">
                <div class="row faq-wrap">
                    <div class="col-lg-12">
                        <div class="faq-head">
                            <h2>Dental Care</h2>
                        </div>
                        <div class="faq-item">
                            <div id="accordion">
                                <div class="card mb-2 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <div class="card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" style="text-decoration: none" >
                                                What type of toothbrush and toothpaste should I use?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quis modi ullam amet debitis libero veritatis enim repellat optio natus eum delectus deserunt, odit expedita eos molestiae ipsa totam quidem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, quos mollitia voluptatum aliquam repellendus similique iure fuga aspernatur amet odit! At vitae dicta excepturi quasi? Veritatis, pariatur excepturi! Illum, ut?
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow mb-2 fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <div class="card-header" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" >
                                                Do I really need to floss?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quis modi ullam amet debitis libero veritatis enim repellat optio natus eum delectus deserunt, odit expedita eos molestiae ipsa totam quidem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, quos mollitia voluptatum aliquam repellendus similique iure fuga aspernatur amet odit! At vitae dicta excepturi quasi? Veritatis, pariatur excepturi! Illum, ut?
                                        </div>
                                    </div>
                                </div>

                                <div class="card wow mb-2 fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <div class="card-header" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" >
                                                What are early signs of dental trouble?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseThree" class="collapse " aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quis modi ullam amet debitis libero veritatis enim repellat optio natus eum delectus deserunt, odit expedita eos molestiae ipsa totam quidem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, quos mollitia voluptatum aliquam repellendus similique iure fuga aspernatur amet odit! At vitae dicta excepturi quasi? Veritatis, pariatur excepturi! Illum, ut?
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow mb-2 fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <div class="card-header" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" >
                                                Why do I need dental test?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseFour" class="collapse " aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quis modi ullam amet debitis libero veritatis enim repellat optio natus eum delectus deserunt, odit expedita eos molestiae ipsa totam quidem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, quos mollitia voluptatum aliquam repellendus similique iure fuga aspernatur amet odit! At vitae dicta excepturi quasi? Veritatis, pariatur excepturi! Illum, ut?
                                        </div>
                                    </div>
                                </div>

                                <div class="card wow mb-2 fadeInUp" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <div class="card-header"  data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="" id="headingFive">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link">
                                                Why do I need dental test?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseFive" class="collapse " aria-labelledby="headingFive" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quis modi ullam amet debitis libero veritatis enim repellat optio natus eum delectus deserunt, odit expedita eos molestiae ipsa totam quidem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, quos mollitia voluptatum aliquam repellendus similique iure fuga aspernatur amet odit! At vitae dicta excepturi quasi? Veritatis, pariatur excepturi! Illum, ut?
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row faq-wrap">
                    <div class="col-lg-12">
                        <div class="faq-head">
                            <h2>Cardiology</h2>
                        </div>
                        <div class="faq-item">
                            <div id="accordion">
                                <div class="card mb-2 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <div class="card-header" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="" id="headingOne2">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" >
                                                What is Cardiologist?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne2" class="collapse show" aria-labelledby="headingOne2" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quis modi ullam amet debitis libero veritatis enim repellat optio natus eum delectus deserunt, odit expedita eos molestiae ipsa totam quidem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, quos mollitia voluptatum aliquam repellendus similique iure fuga aspernatur amet odit! At vitae dicta excepturi quasi? Veritatis, pariatur excepturi! Illum, ut?
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow mb-2 fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <div class="card-header" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="true" aria-controls="" id="headingTwo2">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" >
                                                What is a Cardiothoracic surgeon?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseTwo2" class="collapse " aria-labelledby="headingTwo2" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quis modi ullam amet debitis libero veritatis enim repellat optio natus eum delectus deserunt, odit expedita eos molestiae ipsa totam quidem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, quos mollitia voluptatum aliquam repellendus similique iure fuga aspernatur amet odit! At vitae dicta excepturi quasi? Veritatis, pariatur excepturi! Illum, ut?
                                        </div>
                                    </div>
                                </div>

                                <div class="card wow mb-2 fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <div class="card-header" data-toggle="collapse" data-target="#collapseThree2" aria-expanded="true" aria-controls="" id="headingThree2">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree2" aria-expanded="true" aria-controls="collapseOne">
                                                How does a stress test work?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseThree2" class="collapse " aria-labelledby="headingThree2" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quis modi ullam amet debitis libero veritatis enim repellat optio natus eum delectus deserunt, odit expedita eos molestiae ipsa totam quidem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, quos mollitia voluptatum aliquam repellendus similique iure fuga aspernatur amet odit! At vitae dicta excepturi quasi? Veritatis, pariatur excepturi! Illum, ut?
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow mb-2 fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <div class="card-header" data-toggle="collapse" data-target="#collapseFour2" aria-expanded="true" aria-controls="" id="headingFour2">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" >
                                                Are cardiopulmonary problems hereditary?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseFour2" class="collapse " aria-labelledby="headingFour2" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quis modi ullam amet debitis libero veritatis enim repellat optio natus eum delectus deserunt, odit expedita eos molestiae ipsa totam quidem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, quos mollitia voluptatum aliquam repellendus similique iure fuga aspernatur amet odit! At vitae dicta excepturi quasi? Veritatis, pariatur excepturi! Illum, ut?
                                        </div>
                                    </div>
                                </div>

                                <div class="card wow mb-2 fadeInUp" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <div class="card-header"  data-toggle="collapse" data-target="#collapseFive2" aria-expanded="true" aria-controls="" id="headingFive2">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link">
                                                Do cardiac tests hurt?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseFive2" class="collapse " aria-labelledby="headingFive2" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quis modi ullam amet debitis libero veritatis enim repellat optio natus eum delectus deserunt, odit expedita eos molestiae ipsa totam quidem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, quos mollitia voluptatum aliquam repellendus similique iure fuga aspernatur amet odit! At vitae dicta excepturi quasi? Veritatis, pariatur excepturi! Illum, ut?
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="row faq-wrap">
                    <div class="col-lg-12">
                        <div class="faq-head">
                            <h2>Diagnosis</h2>
                        </div>
                        <div class="faq-item">
                            <div id="accordion">
                                <div class="card mb-2 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <div class="card-header" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true" aria-controls="" id="headingOne3">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" >
                                                What do we know about diagnostic error?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne3" class="collapse show" aria-labelledby="headingOne3" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quis modi ullam amet debitis libero veritatis enim repellat optio natus eum delectus deserunt, odit expedita eos molestiae ipsa totam quidem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, quos mollitia voluptatum aliquam repellendus similique iure fuga aspernatur amet odit! At vitae dicta excepturi quasi? Veritatis, pariatur excepturi! Illum, ut?
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow mb-2 fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <div class="card-header" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="true" aria-controls="" id="headingTwo3">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" >
                                                How often does it happen?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseTwo3" class="collapse " aria-labelledby="headingTwo3" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quis modi ullam amet debitis libero veritatis enim repellat optio natus eum delectus deserunt, odit expedita eos molestiae ipsa totam quidem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, quos mollitia voluptatum aliquam repellendus similique iure fuga aspernatur amet odit! At vitae dicta excepturi quasi? Veritatis, pariatur excepturi! Illum, ut?
                                        </div>
                                    </div>
                                </div>

                                <div class="card wow mb-2 fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <div class="card-header"  data-toggle="collapse" data-target="#collapseThree3" aria-expanded="true" aria-controls="" id="headingThree3">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link">
                                                What is the cause of diagnostic error?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseThree3" class="collapse " aria-labelledby="headingThree3" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quis modi ullam amet debitis libero veritatis enim repellat optio natus eum delectus deserunt, odit expedita eos molestiae ipsa totam quidem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, quos mollitia voluptatum aliquam repellendus similique iure fuga aspernatur amet odit! At vitae dicta excepturi quasi? Veritatis, pariatur excepturi! Illum, ut?
                                        </div>
                                    </div>
                                </div>

                                <div class="card wow mb-2 fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <div class="card-header" data-toggle="collapse" data-target="#collapseFour3" aria-expanded="true" aria-controls="" id="headingFour3">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" >
                                                What are the obstacles to accurate diagnosis?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseFour3" class="collapse " aria-labelledby="headingFour3" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quis modi ullam amet debitis libero veritatis enim repellat optio natus eum delectus deserunt, odit expedita eos molestiae ipsa totam quidem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, quos mollitia voluptatum aliquam repellendus similique iure fuga aspernatur amet odit! At vitae dicta excepturi quasi? Veritatis, pariatur excepturi! Illum, ut?
                                        </div>
                                    </div>
                                </div>

                                <div class="card wow mb-2 fadeInUp" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <div class="card-header"  data-toggle="collapse" data-target="#collapseFive3" aria-expanded="true" aria-controls="" id="headingFive3">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link">
                                                When is a formal diagnosis necessary?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseFive3" class="collapse " aria-labelledby="headingFive3" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quis modi ullam amet debitis libero veritatis enim repellat optio natus eum delectus deserunt, odit expedita eos molestiae ipsa totam quidem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, quos mollitia voluptatum aliquam repellendus similique iure fuga aspernatur amet odit! At vitae dicta excepturi quasi? Veritatis, pariatur excepturi! Illum, ut?
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
