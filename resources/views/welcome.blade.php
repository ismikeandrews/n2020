<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stay Active</title>
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,500,700|Fira+Sans:600" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<script src="https://unpkg.com/animejs@2.2.0/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
								Stay Active
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0">Atividades para todos</h1>
	                        <p class="hero-paragraph">Cadastre-se e tenha acesso antecipado ao aplicativo</p>
							<form action="/" method="post">
								@csrf
								<div class="hero-form field field-grouped">
									<div class="control control-expanded">
										<input class="input" type="email" name="email" placeholder="email">
									</div>
									<div class="control">
										<button class="button button-primary button-block" type="submit">Acesso antecipado</button>
									</div>
								</div>
							</form>
						</div>
						<div class="hero-illustration">
							<img src="{{asset('image/elders.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="features section">
                <div class="container">
                    <div class="features-inner section-inner">
                        <div class="features-header text-center">
                            <div class="container-sm">
                                <h2 class="section-title mt-0">Conheca Stay Active</h2>
                                <p class="section-paragraph">Uma plataforma que mantem os velinhos em casa fazendo atividades recreativas</p>
                            </div>
                        </div>
						<div class="features-wrap">
							<div class="feature text-center">
                                <div class="feature-inner">
                                    <div class="feature-icon" style="background:#FFD2DA;">
										<svg width="88" height="88" xmlns="http://www.w3.org/2000/svg">
										    <g fill="none" fill-rule="nonzero">
										        <path d="M43 47v7a13 13 0 0 0 13-13v-7c-7.18 0-13 5.82-13 13z" fill="#FF6381"/>
										        <path d="M32 41v4a9 9 0 0 0 9 9v-4a9 9 0 0 0-9-9z" fill="#FF97AA"/>
										    </g>
										</svg>
                                    </div>
                                    <h4 class="feature-title h3-mobile mb-8">Powerful</h4>
                                    <p class="text-sm">A pseudo-Latin text used in web design, layout, and printing in place of English to emphasise design elements.</p>
                                </div>
                            </div>
							<div class="feature text-center">
                                <div class="feature-inner">
                                    <div class="feature-icon" style="background:#FFD8CD;">
										<svg width="88" height="88" xmlns="http://www.w3.org/2000/svg">
										    <g fill="none" fill-rule="nonzero">
										        <path d="M54 56h-9a2 2 0 0 1-2-2V43a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2zm-9-13v10h9V43h-9z" fill="#FCAC96"/>
										        <path d="M41 50h-7V34h14v5h2v-5a2 2 0 0 0-2-2H34a2 2 0 0 0-2 2v18a2 2 0 0 0 2 2h7v-4z" fill="#FC8464"/>
										    </g>
										</svg>
                                    </div>
                                    <h4 class="feature-title h3-mobile mb-8">Powerful</h4>
                                    <p class="text-sm">A pseudo-Latin text used in web design, layout, and printing in place of English to emphasise design elements.</p>
                                </div>
                            </div>
							<div class="feature text-center">
                                <div class="feature-inner">
                                    <div class="feature-icon" style="background:#C6FDF3;">
										<svg width="88" height="88" xmlns="http://www.w3.org/2000/svg">
										    <g fill="none" fill-rule="nonzero">
										        <circle fill="#1ADAB7" cx="38" cy="50" r="5"/>
										        <path d="M53 42h2v-8a1 1 0 0 0-1-1h-8v2h5.586l-8.293 8.293a1 1 0 1 0 1.414 1.414L53 36.414V42z" fill="#1ADAB7"/>
										        <path fill="#83F0DD" d="M34 41.414l3-3 3 3L41.414 40l-3-3 3-3L40 32.586l-3 3-3-3L32.586 34l3 3-3 3zM55.414 48L54 46.586l-3 3-3-3L46.586 48l3 3-3 3L48 55.414l3-3 3 3L55.414 54l-3-3z"/>
										    </g>
										</svg>
                                    </div>
                                    <h4 class="feature-title h3-mobile mb-8">Powerful</h4>
                                    <p class="text-sm">A pseudo-Latin text used in web design, layout, and printing in place of English to emphasise design elements.</p>
                                </div>
                            </div>
							<div class="feature text-center">
                                <div class="feature-inner">
                                    <div class="feature-icon" style="background:#E0E1FE;">
										<svg width="88" height="88" xmlns="http://www.w3.org/2000/svg">
										    <g fill="none" fill-rule="nonzero">
										        <path d="M41 42h-7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1zM41 55h-7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1z" fill="#4950F6"/>
										        <path fill="#8D92FA" d="M45 34h10v2H45zM45 39h10v2H45zM45 47h10v2H45zM45 52h10v2H45z"/>
										    </g>
										</svg>
                                    </div>
                                    <h4 class="feature-title h3-mobile mb-8">Powerful</h4>
                                    <p class="text-sm">A pseudo-Latin text used in web design, layout, and printing in place of English to emphasise design elements.</p>
                                </div>
                            </div>
						</div>
                    </div>
                </div>
            </section>

			<section class="testimonials section">
				<div class="testimonials-shape testimonials-shape-1">
					<svg width="280" height="280" viewBox="0 0 280 280" xmlns="http://www.w3.org/2000/svg">
					    <defs>
					        <linearGradient x1="100%" y1="0%" x2="0%" y2="100%" id="testimonials-shape-1">
					            <stop stop-color="#261FB6" offset="0%"/>
					            <stop stop-color="#4950F6" offset="100%"/>
					        </linearGradient>
					    </defs>
					    <circle cx="140" cy="685" r="140" transform="translate(0 -545)" fill="url(#testimonials-shape-1)" fill-rule="evenodd"/>
					</svg>
				</div>
				<div class="testimonials-shape testimonials-shape-2">
					<svg width="125" height="107" viewBox="0 0 125 107" xmlns="http://www.w3.org/2000/svg">
						<g fill="none" fill-rule="evenodd">
							<circle fill="#C6FDF3" cx="48" cy="59" r="48"/>
							<path d="M58.536 39.713c0-6.884 1.72-14.007 5.163-21.368 3.443-7.36 8.167-13.458 14.173-18.292l11.645 7.91c-3.589 4.98-6.262 10.016-8.02 15.106S78.86 33.598 78.86 39.384v13.623H58.536V39.713z" fill="#55EBD0"/>
							<path d="M93.252 39.713c0-6.884 1.722-14.007 5.164-21.368 3.442-7.36 8.166-13.458 14.172-18.292l11.646 7.91c-3.589 4.98-6.262 10.016-8.02 15.106s-2.637 10.529-2.637 16.315v13.623H93.252V39.713z" fill="#1ADAB7"/>
						</g>
					</svg>
				</div>
				<div class="testimonials-shape testimonials-shape-3">
					<svg width="48" height="48" viewBox="0 0 48 48" mlns="http://www.w3.org/2000/svg">
						<defs>
							<linearGradient x1="93.05%" y1="19.767%" x2="15.034%" y2="85.765%" id="testimonials-shape-3">
								<stop stop-color="#FF3058" offset="0%"/>
								<stop stop-color="#FF6381" offset="100%"/>
							</linearGradient>
						</defs>
						<circle cx="24" cy="434" r="24" transform="translate(0 -410)" fill="url(#testimonials-shape-3)" fill-rule="evenodd"/>
					</svg>
				</div>
			</section>

			<section class="newsletter section text-light">
                <div class="container-sm">
                    <div class="newsletter-inner section-inner">
                        <div class="newsletter-header text-center">
                            <h2 class="section-title mt-0">Newsletter</h2>
                            <p class="section-paragraph">Cadastre seu email e fique por dentro das novidades</p>
						</div>
						<form action="/" method="post">
							@csrf
							<div class="footer-form newsletter-form field field-grouped">
								<div class="control control-expanded">
									<input class="input" type="email" name="email" placeholder="Email&hellip;">
								</div>
							</div>
							<br>
							<div class="footer-form newsletter-form field field-grouped">
								<div class="control control-expanded">
									<input class="input" type="text" name="nome" placeholder="Nome&hellip;">
								</div>
							</div>
							<br>
							<div class="footer-form newsletter-form field field-grouped">
								<div class="control control-expanded">
									<input class="input" type="text" name="telefone" placeholder="Telefone&hellip;">
								</div>
							</div>
							<br>
							<div class="control">
								<button class="button button-primary button-block button-shadow" type="submit" style="width: 177px; margin: auto;
							">Cadastre-se</button>
							</div>
						</form>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner has-top-divider">
                    <div class="brand footer-brand">
                        <a href="#">
							Stay Active
                        </a>
                    </div>
                    <ul class="footer-links list-reset">
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">FAQ's</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Facebook</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#FFF"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Twitter</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#FFF"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Google</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#FFF"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">&copy; 2018 StayActive, all rights reserved</div>
                </div>
            </div>
        </footer>
    </div>

	<script src="{{ asset('dist/js/main.min.js') }}"></script>
</body>
</html>
