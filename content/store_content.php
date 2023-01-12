    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner bg-faded text-center rounded">
                        <h2 class="section-heading mb-5">
                            <span class="section-heading-upper">C'est ouvert à tous</span>
                            <span class="section-heading-lower">Venez !</span>
                        </h2>
                        <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                            <?php
                            $array = [
                                "dimanche" => "fermé",
                                "lundi" => "18h à 22h",
                                "mardi" => "18h à 20h",
                                "mercredi" => "16h30 à 18h",
                                "jeudi" => "19h30 à 22h",
                                "vendredi" => "18h à 22h",
                                "samedi" => "fermé"
                            ];
                            // foreach ($array as $key => $value) {
                            //     echo '<li class="list-unstyled-item list-hours-item d-flex">' . $key . '<span class="ms-auto">' . $value . '</span> </li>';
                            // }
                            $auj = (int)date('w');
                            // var_dump($auj);
                            foreach ($array as $jour => $heure) {
                                if (array_search($jour, array_keys($array)) == $auj) {
                                    echo '<li class="list-unstyled-item list-hours-item d-flex today">' .
                                        $jour .
                                        '<span class="ms-auto">' . $heure . '</span>
                                    </li>';
                                } else {
                                    echo '<li class="list-unstyled-item list-hours-item d-flex">' .
                                        $jour .
                                        '<span class="ms-auto">' . $heure . '</span>
                                    </li>';
                                }
                            }
                            ?>
                        </ul>
                        <p class="address mb-5">
                            <em>
                                <strong>Gymnase Jean Mermoz</strong>
                                <br />
                                717 Av. Jean Mermoz, 34000 Montpellier
                            </em>
                        </p>
                        <p class="mb-0">
                            <small><em>Contact</em></small>
                            <br />
                            (+33) 6.45.78.32.45
                        </p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.7966729359723!2d3.8887319154963844!3d43.61077497912277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6af75e9982b11%3A0xc6dd43f58630d399!2sLyc%C3%A9e%20Jean%20Mermoz!5e0!3m2!1sfr!2sfr!4v1672829357116!5m2!1sfr!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include('./content/about_content.php');
    ?>