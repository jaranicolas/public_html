<x-layout>
    <div class="container" id="main-container">

        <a id="mail-trigger" role="button" data-bs-toggle="modal" data-bs-target="#mail-modal"><img
                src="{{ url('public/resources/img/mail.png') }}" alt="Contanos tu opinión"></a>
        <div class="modal fade" id="mail-modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div id="modal-title-scaffold">
                            <div id="upper-stripe"></div>
                            <h5 class="modal-title">Hablanos</h5>
                            <div id="lower-stripe"></div>
                        </div>
                        <button type="button" class="close-mailbox" data-bs-dismiss="modal" aria-label="Close"><img
                                id="close-mailbox-bg" src="public/resources/img/close-cross.svg"></img></button>
                    </div>
                    <div class="modal-body">
                        <ul class="nav nav-pills " id="pills-tab-mailbox" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-message-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-message" type="button" role="tab"
                                    aria-controls="pills-message" aria-selected="true">Mensajes</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-comment-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-comment" type="button" role="tab"
                                    aria-controls="pills-comment" aria-selected="false">Comentar</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-rate-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-rate" type="button" role="tab"
                                    aria-controls="pills-rate" aria-selected="false">Calificar</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tab-content">
                            <div class="tab-pane fade show active" id="pills-message" role="tabpanel"
                                aria-labelledby="pills-message-tab" tabindex="0">
                                <form>
                                    <div class="message-username">
                                        <label for="name-message" class="form-label">Nombre y apellido</label>
                                        <input type="text" class="form-control" id="name-message"
                                            aria-describedby="nameHelp" placeholder="Nombre y Apellido (opcional)">
                                        <div id="nameHelp" class="form-text" hidden>Indique su nombre y apellido si así
                                            lo desea.</div>
                                    </div>
                                    <div class="mailbox-input">
                                        <label for="content-message" class="form-label">Mensaje</label>
                                        <textarea type="text" class="form-control" id="content-message" placeholder="Escribí tu mensaje" required></textarea>
                                    </div>
                                    <div class="mailbox-controls">
                                        <a class="btn whatsapp-shortcut" id="whatsapp-shortcut-message" role="button"
                                            href="https://wa.me/542645858462?text=Hola, quiero hacer una consulta..."><img
                                                src="{{ url('public/resources/img/green_whatsapp.svg') }}"
                                                alt="WhatsApp"></a>
                                        <a class="btn call-shortcut" id="call-shortcut-message" role="button"
                                            href="tel:+542645858462"><img
                                                src="{{ url('public/resources/img/orange_call.svg') }}"
                                                alt="Llamar"></a>
                                        <button type="submit" class="btn btn-primary submit-shortcut"
                                            id="submit-shortcut-message">Enviar</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-comment" role="tabpanel"
                                aria-labelledby="pills-comment-tab" tabindex="0">
                                <form>
                                    <div class="comment-username">
                                        <label for="name-comment" class="form-label">Nombre y apellido</label>
                                        <input type="text" class="form-control" id="name-comment"
                                            aria-describedby="nameHelp2" placeholder="Nombre y Apellido (opcional)">
                                        <div id="nameHelp2" class="form-text" hidden>Indique su nombre y apellido si
                                            así lo desea.</div>
                                    </div>
                                    <div class="mailbox-input">
                                        <label for="content-comment" class="form-label">Mensaje</label>
                                        <textarea type="text" class="form-control" id="content-comment" placeholder="Escribí tu mensaje" required></textarea>
                                    </div>
                                    <div class="mailbox-controls">
                                        <a class="btn whatsapp-shortcut" id="whatsapp-shortcut-comment"
                                            role="button"
                                            href="https://wa.me/542645858462?text=Hola, quiero hacer una consulta..."><img
                                                src="{{ url('public/resources/img/green_whatsapp.svg') }}"
                                                alt="WhatsApp"></a>
                                        <a class="btn call-shortcut" id="call-shortcut-comment" role="button"
                                            href="tel:+542645858462"><img
                                                src="{{ url('public/resources/img/orange_call.svg') }}"
                                                alt="Llamar"></a>
                                        <button type="submit" class="btn btn-primary submit-shortcut"
                                            id="submit-shortcut-comment">Enviar</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-rate" role="tabpanel"
                                aria-labelledby="pills-rate-tab" tabindex="0">
                                <form>

                                    <section id="rate-section">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rate-result"
                                                id="rate-result-1" value="1">
                                            <label class="form-check-label" for="rate-result-1">
                                                Pésimo
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rate-result"
                                                id="rate-result-2" value="2" checked>
                                            <label class="form-check-label" for="rate-result-2">
                                                Malo
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rate-result"
                                                id="rate-result-3" value="3">
                                            <label class="form-check-label" for="rate-result-3">
                                                Normal
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rate-result"
                                                id="rate-result-4" value="4">
                                            <label class="form-check-label" for="rate-result-4">
                                                Bueno
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rate-result"
                                                id="rate-result-5" value="5">
                                            <label class="form-check-label" for="rate-result-5">
                                                Genial
                                            </label>
                                        </div>
                                    </section>

                                    <div class="mailbox-input">
                                        <label for="content-rate" class="form-label">Mensaje</label>
                                        <textarea type="text" class="form-control" id="content-rate" aria-describedby="nameHelp3"
                                            placeholder="Escribí tu mensaje" required></textarea>
                                        <div id="nameHelp3" class="form-text" hidden>Queremos saber tu opinión.</div>
                                    </div>
                                    <div class="mailbox-controls">
                                        <a class="btn whatsapp-shortcut" id="whatsapp-shortcut-rate" role="button"
                                            href="https://wa.me/542645858462?text=Hola, quiero hacer una consulta..."><img
                                                src="{{ url('public/resources/img/green_whatsapp.svg') }}"
                                                alt="WhatsApp"></a>
                                        <a class="btn call-shortcut" id="call-shortcut-rate" role="button"
                                            href="tel:+542645858462"><img
                                                src="{{ url('public/resources/img/orange_call.svg') }}"
                                                alt="Llamar"></a>
                                        <button type="submit" class="btn btn-primary submit-shortcut"
                                            id="submit-shortcut-rate">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="row-a1">
            <div class="col-12 col-12-a1">
                <div class="card card--welcome">
                    <div class="card-body">
                        <div class="top-slider-paragraph">
                            <p>El mejor cuidado para tus seres queridos</p>
                        </div>
                        <div id="welcome-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#welcome-carousel" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#welcome-carousel" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="4000">
                                    {{-- <img src="{{ url('https://placehold.co/5095x3408') }}" alt=""> --}}
                                    <img src="{{ url('public/resources/img/doctor-ecografia.jpg') }}" alt="">
                                </div>
                                <div class="carousel-item" data-bs-interval="4000">
                                    {{-- <img src="{{ url('https://placehold.co/5184x3295') }}" alt=""> --}}
                                    <img src="{{ url('public/resources/img/sala-ecografia.jpg') }}" alt="">
                                </div>
                            </div>
                            <button class="carousel-control-prev" id="prev-arrow" type="button"
                                data-bs-target="#welcome-carousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" id="next-arrow" type="button"
                                data-bs-target="#welcome-carousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <p class="card-text">20 años de experiencia sirviendo a nuestra comunidad.
                            Nuestra misión es ayudar a las personas a acceder a servicios médicos de alta calidad con
                            los mejores profesionales.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-a2" id="">
            <div class="col-12 col-12-a2" id="location-frame">
                <div id="upper-stripe"></div>
                <p id="location-text"><span id="bold-location">Encontranos en: </span><br>
                    Lavalle Norte 780, Jesús María, Córdoba.</p>
                <div id="lower-stripe"></div>
            </div>
        </div>

        <div class="row row-a3" id="PAMI-offers">
            <div class="col-12 col-12-a3" id="">
                <h2>PAMI</h2>
                <h3>Beneficios para jubilados</h3>
                <div id="pami-carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="4000">
                            {{-- <img src="{{ url('https://placehold.co/1995x1130') }}" alt="¡Vení a visitarnos!"> --}}
                            <img src="{{ url('public/resources/img/thumbs-up-friends.png') }}"
                                alt="¡Vení a visitarnos!">
                            <div class="carousel-caption">
                                <p>Inscríbase para un chequeo completo.</p>
                                <button class="btn-standard" id="btn-standard-1">Turno</button>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            {{-- <img src="{{ url('https://placehold.co/1200x720') }}" alt="¡Vení a visitarnos!"> --}}
                            <img src="{{ url('public/resources/img/pami-qr.jpg') }}" alt="¡Vení a visitarnos!">
                            <div class="carousel-caption">
                                <p>Inscríbase con su carnet QR ¡Fácil y rápido!.</p>
                                <button class="btn-standard" id="btn-standard-1">Visítenos</button>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            {{-- <img src="{{ url('https://placehold.co/2020x1127') }}" alt="¡Vení a visitarnos!"> --}}
                            <img src="{{ url('public/resources/img/checking_seniors.png') }}"
                                alt="¡Vení a visitarnos!">
                            <div class="carousel-caption">
                                <p>Atención ambulatoria. Te sostenemos en los momentos más difíciles.</p>
                                <button class="btn-standard" id="btn-standard-2">Saber más</button>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            {{-- <img src="{{ url('https://placehold.co/2015x1017') }}" alt="¡Vení a visitarnos!"> --}}
                            <img src="{{ url('public/resources/img/seniors-cardiology.png') }}"
                                alt="¡Vení a visitarnos!">
                            <div class="carousel-caption">
                                <p>Renovación gratuita de sus beneficios.</p>
                                <button class="btn-standard" id="btn-standard-3">Contacto</button>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" id="prev-arrow-2" type="button"
                        data-bs-target="#pami-carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" id="next-arrow-2" type="button"
                        data-bs-target="#pami-carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row row-a4" id="special-dates">
            <div class="col-12 col-12-a4" id="">
                <h2>Fechas Especiales</h2>
                <div id="dates-carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="4000">
                            <h4>20 de Julio<br>Día del abuelo</h4>
                            {{-- <img src="{{ url('https://placehold.co/612x408') }}" alt="¡Vení a visitarnos!"> --}}
                            <img src="{{ url('public/resources/img/grandpa-playing.jpg') }}"
                                alt="¡Vení a visitarnos!">
                            <div class="carousel-caption">
                                <p>Realizaremos chequeos gratuitos a todos los afiliados de PAMI, acercate a nuestra
                                    clínica o consultanos para saber más.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <h4>14 de Noviembre<br>Día de la diabetes</h4>
                            {{-- <img src="{{ url('https://placehold.co/1557x1044') }}" alt="¡Vení a visitarnos!"> --}}
                            <img src="{{ url('public/resources/img/medical-measurement.png') }}"
                                alt="¡Vení a visitarnos!">
                            <div class="carousel-caption">
                                <p>Queremos cuidarte y contamos con los mejores médicos para ello.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <h4>14 de Noviembre<br>Día del cardiólogo</h4>
                            {{-- <img src="{{ url('https://placehold.co/1554x988') }}" alt="¡Vení a visitarnos!"> --}}
                            <img src="{{ url('public/resources/img/doctor-holding-heart.png') }}"
                                alt="¡Vení a visitarnos!">
                            <div class="carousel-caption">
                                <p>Vení y consultá a un especialista en cardiología.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" id="prev-arrow-2" type="button"
                        data-bs-target="#dates-carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" id="next-arrow-2" type="button"
                        data-bs-target="#dates-carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        @foreach ($posts as $post)
            @if ($post->type == '1')
                <div class="row row-a5 type-1-post">
                    <div class="col-12 col-12-a5">
                        <div class="card type-1-post-card">
                            <div class="card-body type-1-post-card-body">
                                <h5 class="card-title type-1-post-card-title">{{ $post->title }}</h5>
                                {{-- <img src="{{ url('https://placehold.co/2236x1376') }}" class="card-img-top"
                        alt="Contamos con una gama de especialistas en medicina"> --}}
                                <img src="{{ url("./storage/img/$post->photo") }}" class="card-img-top"
                                    alt="Contactanos para saber más">
                                <p class="card-text type-1-post-card-text">{{ $post->content }}</p>
                                <button href="{{ url('post.show', ['post' => $post]) }}"
                                    class="btn-standard">{{ $post->btn }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif ($post->type == '2')
                <div class="row row-a6 type-2-post">
                    <div class="col-12 col-12-a6">
                        <div class="card type-2-post-card">
                            <div class="card-body type-2-post-card-body">
                                <h5 class="card-title type-2-post-card-title">{{ $post->title }}</h5>
                                <img src="{{ url("./storage/img/$post->photo") }}" class="card-img-top"
                                    alt="Contactanos para saber más.">
                                {{-- <img src="{{ url('public/resources/img/doctor-ecografia.jpg') }}" class="card-img-top" alt="Medicina para el corazón y todo el sistema circulatorio."> --}}
                                <p class="card-text type-2-post-card-text">{{ $post->content }}</p>
                                <button href="{{ url('post.show', ['post' => $post]) }}"
                                    class="btn-standard">{{ $post->btn }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</x-layout>
