<?php $page = 'faq'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.backgroundimage')
    @endcomponent
    @component('components.breadcrumb')
        @slot('title')
            Frequently Asked Questions
        @endslot
        @slot('li_1')
            Home
        @endslot
        @slot('li_2')
            Frequently Asked Questions
        @endslot
    @endcomponent
    <div class="content">
        <div class="container">
            <div class="row">

                <!-- Faq List -->
                <div class="col-md-10 mx-auto">
                    <div class="faq-section">
                        <div class="faq-card">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqOne" aria-expanded="false">In which
                                    areas do you operate?</a>
                            </h4>
                            <div id="faqOne" class="card-collapse collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia
                                    voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                    ratione voluptatem sequi nesciunt.</p>
                            </div>
                        </div>
                        <div class="faq-card">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqTwo" aria-expanded="false">Sed ut
                                    perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium?</a>
                            </h4>
                            <div id="faqTwo" class="card-collapse collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia
                                    voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                    ratione voluptatem sequi nesciunt.</p>
                            </div>
                        </div>
                        <div class="faq-card">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqThree" aria-expanded="false">Nemo
                                    enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia?</a>
                            </h4>
                            <div id="faqThree" class="card-collapse collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia
                                    voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                    ratione voluptatem sequi nesciunt.</p>
                            </div>
                        </div>
                        <div class="faq-card">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqFour" aria-expanded="false">Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor?</a>
                            </h4>
                            <div id="faqFour" class="card-collapse collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia
                                    voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                    ratione voluptatem sequi nesciunt.</p>
                            </div>
                        </div>
                        <div class="faq-card">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqFive" aria-expanded="false">eque
                                    porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                    velit?</a>
                            </h4>
                            <div id="faqFive" class="card-collapse collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia
                                    voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                    ratione voluptatem sequi nesciunt.</p>
                            </div>
                        </div>
                        <div class="faq-card">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqSix" aria-expanded="false">At vero
                                    eos et accusamus et iusto odio dignissimos ducimus?</a>
                            </h4>
                            <div id="faqSix" class="card-collapse collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia
                                    voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                    ratione voluptatem sequi nesciunt.</p>
                            </div>
                        </div>
                        <div class="faq-card">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqSeven" aria-expanded="false">Nam
                                    libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id
                                    quod?</a>
                            </h4>
                            <div id="faqSeven" class="card-collapse collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia
                                    voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                    ratione voluptatem sequi nesciunt.</p>
                            </div>
                        </div>
                        <div class="faq-card">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqEight" aria-expanded="false">Nemo
                                    enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia?</a>
                            </h4>
                            <div id="faqEight" class="card-collapse collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia
                                    voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                    ratione voluptatem sequi nesciunt.</p>
                            </div>
                        </div>
                        <div class="faq-card">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqNine" aria-expanded="false">Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor?</a>
                            </h4>
                            <div id="faqNine" class="card-collapse collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia
                                    voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                    ratione voluptatem sequi nesciunt.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Faq List -->

                <!-- Faq Question -->
                <div class="col-md-6 mx-auto">
                    <div class="faq-sec">
                        <h4>Still have a questions?</h4>
                        <p>If you cannot find answer to your question in our FAQ, you can always contact us. We wil answer
                            to you shortly!</p>
                    </div>
                </div>
                <!-- /Faq Question -->

            </div>
        </div>
    </div>
@endsection
