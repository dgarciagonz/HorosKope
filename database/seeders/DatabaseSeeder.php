<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Carta;
use App\Models\Signo;
use App\Models\Horoscopo;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function ArcanosMayores() {

        //Carta::truncate();

        $mago = new Carta;
        $mago->nombre = 'El Mago';
        $mago->imagen = 'cartas/t-1-mago.jpg';
        $mago->significado = 'Poder, habilidad, potencial y manifestación. Representa el poder de la manifestación y la habilidad para hacer realidad los deseos. Es el arquetipo del iniciador, el que tiene todas las herramientas necesarias para iniciar un nuevo viaje o proyecto.';
        $mago->amor = 'Representa el inicio de una relación llena de pasión y atracción. Puede indicar el inicio de una conexión significativa y la manifestación de sentimientos intensos.';
        $mago->dinero = 'Sugiere el potencial para nuevas oportunidades financieras y el éxito en proyectos creativos. Es un recordatorio de confiar en tus habilidades y utilizar tus recursos sabiamente.';
        $mago->salud = 'Indica vitalidad y energía renovada. Es un buen momento para centrarse en el bienestar físico y mental, así como en adoptar un enfoque proactivo hacia la salud.';
        $mago->posNeg = true;
        $mago->save();

        $sacerdotisa = new Carta;
        $sacerdotisa->nombre = 'La Sacerdotisa';
        $sacerdotisa->imagen = '/cartas/t-2-sacerdotisa.jpg';
        $sacerdotisa->significado = ' Intuición, sabiduría interior, misterio y receptividad.  Simboliza la intuición, el conocimiento interior y el misterio. Es la guardiana de los secretos y la conexión con el mundo espiritual.';
        $sacerdotisa->amor = 'Simboliza la conexión espiritual y la intimidad emocional en una relación. Puede indicar la necesidad de escuchar tu intuición y profundizar en tus sentimientos más profundos.';
        $sacerdotisa->dinero = 'Representa la necesidad de confiar en tu intuición en asuntos financieros y buscar orientación interna para tomar decisiones acertadas. Puede indicar el momento de ser prudente y reflexivo en tus inversiones.';
        $sacerdotisa->salud = 'Sugiere la importancia de cuidar tu bienestar emocional y espiritual. Es un recordatorio de escuchar tu cuerpo y prestar atención a las señales que te envía.';
        $sacerdotisa->posNeg = false;
        $sacerdotisa->save();

        $emperatriz = new Carta;
        $emperatriz->nombre = 'La Emperatriz';
        $emperatriz->imagen = '/cartas/t-3-emperatriz.jpg';
        $emperatriz->significado = 'Fertilidad, creatividad, abundancia y sensualidad. Es el símbolo de la feminidad, la fertilidad y la creatividad. Representa la generosidad, la abundancia y la belleza.';
        $emperatriz->amor = 'Simboliza la fertilidad y el amor maternal. Puede indicar la armonía y la estabilidad en una relación, así como el crecimiento y la expansión del amor.';
        $emperatriz->dinero = 'Representa la prosperidad y la abundancia material. Es un buen augurio para el éxito financiero y la realización de tus metas financieras. Sugiere la necesidad de confiar en tu intuición y aprovechar las oportunidades que se presenten.';
        $emperatriz->salud = 'Indica un período de bienestar y vitalidad. Es un buen momento para enfocarse en el autocuidado y adoptar hábitos saludables que promuevan la salud y el equilibrio.';
        $emperatriz->posNeg = true;
        $emperatriz->save();

        $emperador = new Carta;
        $emperador->nombre = 'El Emperador';
        $emperador->imagen = '/cartas/t-4-emperador.jpg';
        $emperador->significado = 'Autoridad, estructura, estabilidad y control. Representa el poder, la autoridad y el control. Es el arquetipo del líder y el organizador, que establece estructuras y reglas. Puede indicar la necesidad de establecer límites claros y tomar decisiones firmes.';
        $emperador->amor = 'Simboliza el poder y la autoridad en una relación. Puede indicar la necesidad de establecer límites claros y mantener el equilibrio en la relación.';
        $emperador->dinero = 'Representa el éxito financiero y el logro de metas a través de la determinación y el enfoque. Es un recordatorio de tomar decisiones firmes y liderar con confianza en asuntos financieros.';
        $emperador->salud = 'Sugiere la necesidad de establecer una rutina y disciplina en el cuidado de la salud. Es un buen momento para enfocarse en mantener un estilo de vida equilibrado y establecer metas realistas para mejorar la salud.';
        $emperador->posNeg = true;
        $emperador->save();

        $sumo_sacerdote = new Carta;
        $sumo_sacerdote->nombre = 'El Sumo Sacerdote';
        $sumo_sacerdote->imagen = '/cartas/t-5-sumo-sacerdote.jpg';
        $sumo_sacerdote->significado = 'Espiritualidad, conocimiento, tradición y guía interior. Simboliza la sabiduría espiritual, la tradición y el conocimiento interior. Representa la búsqueda de la verdad y la conexión con lo divino a través de la meditación y la introspección. Puede indicar la necesidad de seguir una guía espiritual o ética.';
        $sumo_sacerdote->amor = 'Representa la sabiduría y la orientación espiritual en una relación. Puede indicar la necesidad de confiar en tu intuición y buscar la verdad en tus relaciones.';
        $sumo_sacerdote->dinero = 'Simboliza la necesidad de tomar decisiones basadas en principios éticos y morales en asuntos financieros. Es un recordatorio de seguir tu conciencia y buscar orientación espiritual en decisiones financieras importantes.';
        $sumo_sacerdote->salud = 'Indica la importancia de la paz interior y la serenidad en el bienestar emocional y espiritual. Es un buen momento para reflexionar sobre tus creencias y valores en relación con la salud y el bienestar.';
        $sumo_sacerdote->posNeg = null;
        $sumo_sacerdote->save();

        $enamorados = new Carta;
        $enamorados->nombre = 'Los Enamorados';
        $enamorados->imagen = '/cartas/t-6-amantes.jpg';
        $enamorados->significado = 'Elección, unión, dualidad y armonía. Representa la elección y la dualidad. Simboliza el amor, la armonía y la unión, pero también la indecisión y la tentación. Puede indicar la necesidad de tomar decisiones importantes y seguir nuestro corazón.';
        $enamorados->amor = 'Simboliza la elección y la conexión emocional en una relación. Puede indicar decisiones importantes en el amor y la necesidad de armonizar los deseos personales con los de la pareja.';
        $enamorados->dinero = 'Representa decisiones financieras significativas y la necesidad de elegir entre diferentes opciones. Puede indicar la importancia de seguir tu corazón y tomar decisiones alineadas con tus valores en asuntos financieros.';
        $enamorados->salud = 'Sugiere la importancia de equilibrar cuerpo, mente y espíritu. Es un buen momento para tomar decisiones conscientes en relación con la salud y buscar el equilibrio en todas las áreas de tu vida.';
        $enamorados->posNeg = true;
        $enamorados->save();

        $carro = new Carta;
        $carro->nombre = 'El Carro';
        $carro->imagen = '/cartas/t-7-carro.jpg';
        $carro->significado = 'Triunfo, avance, determinación y control de fuerzas opuestas. Representa el triunfo, el avance y la determinación. Simboliza la superación de obstáculos y el logro de metas. Puede indicar la necesidad de tomar el control de nuestra vida y dirigirla hacia nuestros objetivos.';
        $carro->amor = 'Simboliza el impulso y el movimiento hacia adelante en una relación. Puede indicar la superación de obstáculos y la victoria en el amor, así como el compromiso y la determinación para seguir adelante juntos.';
        $carro->dinero = 'Representa el éxito y el avance en los objetivos financieros. Es un buen augurio para el progreso profesional y la realización de metas financieras a través del trabajo arduo y la determinación.';
        $carro->salud = 'Indica la importancia de mantener el equilibrio y la estabilidad emocional en el bienestar físico y mental. Es un buen momento para seguir adelante con confianza y superar los desafíos que puedan surgir en el camino hacia una mejor salud.';
        $carro->posNeg = true;
        $carro->save();

        $fuerza = new Carta;
        $fuerza->nombre = 'Fuerza';
        $fuerza->imagen = '/cartas/t-8-fuerza.jpg';
        $fuerza->significado = 'Valor, pasión, compasión y dominio interior. Representa el coraje, la pasión y la fuerza interior. Simboliza el dominio de nuestras emociones y la capacidad para superar los desafíos con gracia y compasión. Puede indicar la necesidad de controlar nuestros impulsos y utilizar nuestra fuerza interior para lograr nuestros objetivos.';
        $fuerza->amor = 'Simboliza la compasión y el control emocional en una relación. Puede indicar la importancia de la paciencia y la comprensión en el amor, así como la necesidad de enfrentar los desafíos con valentía y determinación.';
        $fuerza->dinero = 'Representa la capacidad de superar obstáculos y lograr el éxito financiero a través del trabajo duro y la perseverancia. Es un buen augurio para la resolución de problemas financieros y la manifestación de la abundancia material.';
        $fuerza->salud = 'Sugiere la importancia de mantener el equilibrio emocional y la fortaleza interior en el bienestar físico y mental. Es un buen momento para cultivar la fuerza interior y la resistencia para superar cualquier desafío en el camino hacia una mejor salud.';
        $fuerza->posNeg = true;
        $fuerza->save();

        $hermit = new Carta;
        $hermit->nombre = 'El Hermitaño';
        $hermit->imagen = '/cartas/t-9-hermit.jpg';
        $hermit->significado = 'Reflexión, sabiduría interior, búsqueda y soledad. Representa la introspección, la sabiduría interior y la búsqueda de la verdad. Simboliza la soledad voluntaria y la necesidad de alejarse del mundo exterior para encontrar respuestas dentro de uno mismo. Puede indicar la necesidad de reflexionar y buscar orientación espiritual.';
        $hermit->amor = 'Representa la introspección y la búsqueda interior en una relación. Puede indicar la necesidad de tomar un tiempo para reflexionar sobre tus sentimientos y necesidades en el amor, así como la importancia de la soledad para el crecimiento personal.';
        $hermit->dinero = 'Simboliza la necesidad de evaluar cuidadosamente tus objetivos financieros y buscar orientación interna en asuntos monetarios. Puede indicar el momento de retirarse temporalmente de situaciones financieras para obtener claridad y perspectiva.';
        $hermit->salud = 'Indica la importancia de cuidar tu bienestar emocional y espiritual. Es un buen momento para realizar prácticas de autocuidado y buscar la tranquilidad interior para mejorar la salud y el equilibrio en todas las áreas de tu vida.';
        $hermit->posNeg = null;
        $hermit->save();

        $rueda_fortuna = new Carta;
        $rueda_fortuna->nombre = 'La Rueda de la Fortuna';
        $rueda_fortuna->imagen = '/cartas/t-10-rueda-fortuna.jpg';
        $rueda_fortuna->significado = 'Cambio, destino, oportunidad y ciclos de vida. Simboliza el cambio, la suerte y los ciclos de la vida. Representa la inevitabilidad del cambio y la necesidad de adaptarse a las circunstancias cambiantes. Puede indicar el comienzo de un nuevo ciclo o la necesidad de aceptar el flujo de la vida.';
        $rueda_fortuna->amor = 'Simboliza los cambios y las oportunidades en una relación. Puede indicar el inicio de un nuevo ciclo en el amor, así como la necesidad de adaptarse a los cambios y aprovechar las oportunidades que se presenten.';
        $rueda_fortuna->dinero = ' Representa la suerte y las circunstancias cambiantes en asuntos financieros. Es un buen augurio para el éxito y el progreso en objetivos financieros, así como la necesidad de estar preparado para los altibajos del mercado.';
        $rueda_fortuna->salud = 'Indica cambios positivos y mejoras en la salud. Es un buen momento para adoptar un enfoque optimista hacia el bienestar físico y mental, así como para estar abierto a nuevas oportunidades de mejora y crecimiento.';
        $rueda_fortuna->posNeg = true;
        $rueda_fortuna->save();

        $justicia = new Carta;
        $justicia->nombre = 'La Justicia';
        $justicia->imagen = '/cartas/t-11-justicia.jpg';
        $justicia->significado = 'Equilibrio, imparcialidad, karma y toma de decisiones. Simboliza el equilibrio, la imparcialidad y la ley universal. Representa la justicia y la integridad, así como la necesidad de tomar responsabilidad por nuestras acciones. Puede indicar la necesidad de tomar decisiones basadas en la equidad y la verdad.';
        $justicia->amor = 'Simboliza la equidad y el equilibrio en una relación. Puede indicar la necesidad de tomar decisiones justas y consideradas en el amor, así como la importancia de la honestidad y la transparencia en la relación.';
        $justicia->dinero = 'Representa la necesidad de equilibrar ingresos y gastos, así como de tomar decisiones financieras justas y éticas. Puede indicar la resolución de disputas financieras y el logro de equilibrio en asuntos monetarios.';
        $justicia->salud = 'Sugiere la importancia de mantener un estilo de vida equilibrado y adoptar decisiones saludables. Es un buen momento para abordar cualquier desequilibrio en la salud y buscar soluciones equitativas para mejorar el bienestar físico y emocional.';
        $justicia->posNeg = null;
        $justicia->save();

        $colgado = new Carta;
        $colgado->nombre = 'El Colgado';
        $colgado->imagen = '/cartas/t-12-colgado.jpg';
        $colgado->significado = 'Sacrificio, rendición, perspectiva y liberación. Simboliza el sacrificio, la rendición y la perspectiva. Representa la necesidad de dejar ir el control y adoptar una nueva perspectiva en la vida. Puede indicar la necesidad de renunciar a algo importante para obtener una mayor comprensión o claridad.';
        $colgado->amor = 'Representa la entrega y la aceptación en una relación. Puede indicar la necesidad de dejar ir el control y confiar en el proceso del amor, así como la importancia de sacrificar tu ego por el bienestar de la relación.';
        $colgado->dinero = 'Simboliza la necesidad de hacer sacrificios temporales en asuntos financieros para lograr objetivos a largo plazo. Puede indicar el momento de renunciar a ciertos placeres materiales en aras de una mayor estabilidad financiera en el futuro.';
        $colgado->salud = 'Indica la importancia de aceptar los desafíos y aprender de las experiencias difíciles en el bienestar físico y emocional. Es un buen momento para practicar la gratitud y la aceptación para encontrar paz interior y equilibrio en la salud.';
        $colgado->posNeg = null;
        $colgado->save();

        $muerte = new Carta;
        $muerte->nombre = 'Muerte';
        $muerte->imagen = '/cartas/t-13-muerte.jpg';
        $muerte->significado = 'Transformación, finales, renovación y cambio radical. Representa la transformación, la renovación y el cambio radical. Simboliza el fin de una etapa y el comienzo de otra nueva. Puede indicar la necesidad de dejar ir el pasado y abrirnos a nuevas posibilidades y oportunidades en la vida.';
        $muerte->amor = 'Simboliza el fin de una fase y el inicio de una nueva en una relación. Puede indicar transformaciones importantes en el amor y la necesidad de dejar ir el pasado para dar paso a un futuro más prometedor.';
        $muerte->dinero = 'Representa el final de un ciclo financiero y la oportunidad de comenzar de nuevo. Es un buen augurio para la eliminación de deudas y la superación de obstáculos financieros, así como para la manifestación de nuevas oportunidades de crecimiento económico.';
        $muerte->salud = 'Sugiere la necesidad de dejar ir viejos hábitos y patrones que ya no te sirven en el bienestar físico y emocional. Es un buen momento para abrazar el cambio y permitirte crecer y transformarte en una versión más saludable y equilibrada de ti mismo.';
        $muerte->posNeg = false;
        $muerte->save();

        $templanza = new Carta;
        $templanza->nombre = 'Templanza';
        $templanza->imagen = '/cartas/t-14-templanza.jpg';
        $templanza->significado = 'Armonía, equilibrio, moderación y adaptabilidad. Simboliza la armonía, el equilibrio y la moderación. Representa la integración de opuestos y la búsqueda de la paz interior. Puede indicar la necesidad de encontrar un equilibrio entre diferentes aspectos de nuestra vida y mantener la calma en tiempos de conflicto.';
        $templanza->amor = 'Simboliza la armonía y el equilibrio en una relación. Puede indicar la importancia de la paciencia y la moderación en el amor, así como la necesidad de encontrar un punto medio entre diferentes aspectos de la relación.';
        $templanza->dinero = 'Representa la necesidad de equilibrar ingresos y gastos, así como de buscar soluciones creativas en asuntos financieros. Es un buen augurio para la cooperación y la colaboración en proyectos financieros, así como para la manifestación de la estabilidad económica.';
        $templanza->salud = 'Indica la importancia de mantener un enfoque equilibrado hacia el bienestar físico y mental. Es un buen momento para adoptar hábitos saludables y buscar la armonía interior para mejorar la salud y el equilibrio en todas las áreas de tu vida.';
        $templanza->posNeg = true;
        $templanza->save();

        $diablo = new Carta;
        $diablo->nombre = 'El Diablo';
        $diablo->imagen = '/cartas/t-15-diablo.jpg';
        $diablo->significado = 'Tentación, adicción, deseo y libertad interior. Representa la tentación, el materialismo y el deseo. Simboliza la esclavitud a los deseos mundanos y la necesidad de liberarse de las ataduras del ego. Puede indicar la necesidad de enfrentar nuestros miedos y deseos más oscuros para encontrar la verdadera libertad.';
        $diablo->amor = 'Representa la tentación y la obsesión en una relación. Puede indicar la presencia de deseos egoístas y comportamientos destructivos en el amor, así como la necesidad de liberarse de relaciones tóxicas para encontrar la verdadera felicidad';
        $diablo->dinero = 'Simboliza la esclavitud y las deudas en asuntos financieros. Puede indicar la presencia de malos hábitos financieros y la necesidad de liberarse de la dependencia material para lograr la verdadera libertad financiera.';
        $diablo->salud = 'Sugiere la presencia de hábitos poco saludables y adicciones que pueden afectar negativamente el bienestar físico y emocional. Es un buen momento para enfrentar tus demonios internos y buscar la ayuda necesaria para superar cualquier adicción o comportamiento perjudicial.';
        $diablo->posNeg = false;
        $diablo->save();

        $torre = new Carta;
        $torre->nombre = 'La Torre';
        $torre->imagen = '/cartas/t-16-torre.jpg';
        $torre->significado = 'Cambio repentino, destrucción, revelación y liberación. Simboliza el cambio repentino, la destrucción y la revelación. Representa la necesidad de derribar estructuras obsoletas y construir algo nuevo sobre sus ruinas. Puede indicar la necesidad de enfrentar la verdad y liberarse de ilusiones o falsas creencias.';
        $torre->amor = 'Simboliza la destrucción y la revelación en una relación. Puede indicar la necesidad de enfrentar la verdad y liberarse de ilusiones en el amor, así como la oportunidad de reconstruir una relación sobre bases más sólidas y auténticas.';
        $torre->dinero = 'Representa la crisis y el cambio repentino en asuntos financieros. Es un buen augurio para la eliminación de estructuras obsoletas y la oportunidad de construir una base financiera más fuerte a partir de los escombros de la adversidad.';
        $torre->salud = 'Indica la necesidad de enfrentar crisis y desafíos inesperados en el bienestar físico y emocional. Es un buen momento para buscar ayuda externa y adoptar una actitud resiliente para superar cualquier obstáculo en el camino hacia una mejor salud.';
        $torre->posNeg = false;
        $torre->save();

        $estrella = new Carta;
        $estrella->nombre = 'La Estrella';
        $estrella->imagen = '/cartas/t-17-estrella.jpg';
        $estrella->significado = 'Esperanza, inspiración, iluminación y renovación espiritual. Representa la esperanza, la inspiración y la renovación espiritual. Simboliza la conexión con la divinidad y la fe en un futuro mejor. Puede indicar la necesidad de encontrar esperanza y orientación en tiempos difíciles y seguir nuestra intuición.';
        $estrella->amor = 'Simboliza la esperanza y la inspiración en una relación. Puede indicar la presencia de nuevos comienzos y la renovación del amor, así como la necesidad de mantener la fe en el futuro y en el potencial de la relación.';
        $estrella->dinero = 'Representa la claridad y la guía en asuntos financieros. Es un buen augurio para la manifestación de oportunidades económicas prometedoras y la realización de metas financieras a largo plazo, así como la necesidad de confiar en tu intuición financiera.';
        $estrella->salud = 'Indica la recuperación y la renovación en el bienestar físico y emocional. Es un buen momento para buscar el equilibrio y la armonía interior, así como para nutrir tu cuerpo, mente y espíritu con energía positiva y vitalidad.';
        $estrella->posNeg = true;
        $estrella->save();

        $luna = new Carta;
        $luna->nombre = 'La Luna';
        $luna->imagen = '/cartas/t-18-luna.jpg';
        $luna->significado = 'Ilusión, miedo, intuición y engaño. Simboliza la ilusión, el miedo y la intuición. Representa el mundo de los sueños y la imaginación, así como los miedos y las dudas que pueden obstaculizar nuestro camino. Puede indicar la necesidad de explorar nuestras emociones más profundas y confiar en nuestra intuición.';
        $luna->amor = 'Representa la ilusión y el misterio en una relación. Puede indicar la presencia de emociones ocultas y confusión en el amor, así como la necesidad de explorar tus sentimientos más profundos y enfrentar tus miedos e inseguridades.';
        $luna->dinero = 'Simboliza la incertidumbre y la confusión en asuntos financieros. Es un buen momento para ser consciente de los engaños y las ilusiones en las finanzas, así como para confiar en tu intuición y buscar la verdad detrás de las apariencias.';
        $luna->salud = 'Sugiere la presencia de ansiedad y emociones fluctuantes que pueden afectar el bienestar físico y emocional. Es un buen momento para practicar la atención plena y la auto-reflexión para encontrar estabilidad emocional y equilibrio en la salud.';
        $luna->posNeg = false;
        $luna->save();

        $sol = new Carta;
        $sol->nombre = 'El Sol';
        $sol->imagen = '/cartas/t-19-sol.jpg';
        $sol->significado = ' Alegría, claridad, éxito y vitalidad. Representa la alegría, la claridad y el éxito. Simboliza la iluminación y la realización de nuestro potencial más elevado. Puede indicar la necesidad de encontrar alegría y gratitud en la vida y seguir nuestros sueños con confianza y optimismo.';
        $sol->amor = 'Simboliza la felicidad y la alegría en una relación. Puede indicar la realización de los deseos del corazón y la armonía en el amor, así como la oportunidad de disfrutar del amor verdadero y la conexión profunda con tu pareja.';
        $sol->dinero = 'Representa el éxito y la prosperidad en asuntos financieros. Es un buen augurio para la manifestación de la abundancia material y el logro de metas financieras, así como la necesidad de compartir tu riqueza y generosidad con los demás.';
        $sol->salud = 'Indica la vitalidad y el bienestar en el cuerpo y la mente. Es un buen momento para disfrutar de la energía positiva y la vitalidad, así como para practicar un estilo de vida saludable y equilibrado que nutra tu bienestar físico y emocional.';
        $sol->posNeg = true;
        $sol->save();

        $juicio = new Carta;
        $juicio->nombre = 'El Juicio';
        $juicio->imagen = '/cartas/t-20-juicio.jpg';
        $juicio->significado = 'Renacimiento, evaluación, llamado a la acción y resolución. Simboliza el renacimiento, la evaluación y la llamada a la acción. Representa la necesidad de hacer una evaluación honesta de nuestra vida y tomar decisiones importantes para nuestro futuro. Puede indicar la necesidad de hacer cambios significativos y seguir nuestro propósito más elevado.';
        $juicio->amor = 'Representa la renovación y la transformación en una relación. Puede indicar la necesidad de hacer las paces con el pasado y dejar atrás viejos rencores, así como la oportunidad de comenzar de nuevo y construir una relación más auténtica y significativa.';
        $juicio->dinero = 'Simboliza la resolución de problemas y la toma de decisiones importantes en asuntos financieros. Es un buen momento para evaluar tus opciones y seguir tu intuición financiera, así como para estar preparado para las consecuencias de tus acciones en el camino hacia el éxito financiero.';
        $juicio->salud = 'Sugiere la necesidad de hacer cambios positivos en el bienestar físico y emocional. Es un buen momento para liberarse de hábitos poco saludables y adoptar un enfoque más consciente hacia la salud y el bienestar en todas las áreas de tu vida.';
        $juicio->posNeg = true;
        $juicio->save();

        $mundo = new Carta;
        $mundo->nombre = 'El mundo';
        $mundo->imagen = '/cartas/t-21-mundo.jpg';
        $mundo->significado = 'Integración, cumplimiento, logro y conexión con lo divino. Representa la integración, el cumplimiento y la realización. Simboliza la conexión con el universo y la sensación de completitud y armonía. Puede indicar la culminación de un ciclo y la realización de nuestros objetivos más grandes y significativos en la vida.';
        $mundo->amor = 'Simboliza la culminación y la realización en una relación. Puede indicar la celebración de un amor duradero y la armonía en la pareja, así como la sensación de plenitud y satisfacción en el amor verdadero.';
        $mundo->dinero = 'Representa el logro de metas y el éxito en asuntos financieros. Es un buen augurio para la manifestación de la prosperidad y la abundancia material, así como la realización de tus sueños financieros más ambiciosos.';
        $mundo->salud = 'Indica la integración y el equilibrio en el bienestar físico y emocional. Es un buen momento para encontrar la armonía interior y la paz mental, así como para adoptar un enfoque holístico hacia la salud que nutra el cuerpo, la mente y el espíritu';
        $mundo->posNeg = true;
        $mundo->save();

        $loco = new Carta;
        $loco->nombre = 'El Loco';
        $loco->imagen = 'cartas/t-0-loco.jpg';
        $loco->significado = 'Libertad, espontaneidad, inocencia y viaje espiritual. ';
        $loco->amor = 'Representa la espontaneidad y la libertad en una relación. Puede indicar la necesidad de aventurarse en lo desconocido y explorar nuevas experiencias amorosas, así como la disposición para seguir el corazón y tomar riesgos en el amor.';
        $loco->dinero = 'Simboliza la imprudencia y la falta de dirección en asuntos financieros. Es un buen momento para ser consciente de los riesgos financieros y buscar orientación y consejo antes de embarcarse en nuevas empresas o inversiones.';
        $loco->salud = 'Sugiere la necesidad de cuidar tu bienestar físico y emocional mientras te aventuras en nuevos territorios. Es un buen momento para mantener la mente abierta y ser flexible en tu enfoque hacia la salud.';
        $loco->posNeg = true;
        $loco->save();
    }

    public function Bastos() {

        $reinaB = new Carta;
        $reinaB->nombre = 'Reina de Bastos';
        $reinaB->imagen = '/cartas/reina-bastos.jpg';
        $reinaB->significado = 'Es la creatividad y el liderazgo. Representa a una persona segura de sí misma y apasionada que inspira a otros con su energía. Puede indicar la necesidad de expresar la creatividad y tomar el control de las situaciones.';
        $reinaB->amor = 'Simboliza la creatividad y la pasión en una relación. Indica una figura emocionalmente inteligente y comprensiva que puede inspirar a su pareja y fomentar la conexión emocional.';
        $reinaB->dinero = 'Representa la independencia financiera y la determinación en el trabajo. Puede indicar la capacidad de tomar decisiones sólidas y seguir adelante con confianza en el ámbito laboral.';
        $reinaB->salud = 'Sugiere equilibrio y armonía. Puede representar la necesidad de encontrar un equilibrio entre el trabajo y el descanso, y mantener una actitud positiva hacia la salud mental y física.';
        $reinaB->posNeg = true;
        $reinaB->save();

        $reyB = new Carta;
        $reyB->nombre = 'Rey de bastos';
        $reyB->imagen = '/cartas/rey-bastos.jpg';
        $reyB->significado = ' Simboliza el liderazgo y la determinación. Indica una persona carismática y visionaria que está lista para asumir responsabilidades. Puede representar el éxito y la realización de objetivos a través de la acción decidida.';
        $reyB->amor = 'Representa la pasión y el liderazgo en una relación. Indica una figura dominante y carismática que puede ofrecer apoyo y estabilidad emocional a su pareja.';
        $reyB->dinero = 'Simboliza la ambición y el éxito en el ámbito laboral. Puede indicar la capacidad de tomar decisiones estratégicas y liderar proyectos hacia el éxito financiero.';
        $reyB->salud = 'Sugiere vitalidad y energía. Puede representar la necesidad de mantener un enfoque positivo y proactivo hacia la salud y el bienestar físico.';
        $reyB->posNeg = true;
        $reyB->save();

        $caballoB = new Carta;
        $caballoB->nombre = 'Caballero de Bastos';
        $caballoB->imagen = '/cartas/caballo-bastos.jpg';
        $caballoB->significado = 'Simboliza la acción rápida y el impulso hacia adelante. Indica la búsqueda de aventuras y la disposición para enfrentar desafíos. Puede representar a una persona audaz y decidida que está lista para asumir riesgos.';
        $caballoB->amor = 'Simboliza el romance y la pasión ardiente en una relación. Puede indicar la llegada de un amante apasionado o el despertar de la atracción sexual intensa.';
        $caballoB->dinero = 'Indica la búsqueda de metas ambiciosas y el deseo de éxito en el ámbito financiero. Representa la determinación y la valentía para perseguir los sueños y alcanzar el éxito material.';
        $caballoB->salud = 'Sugiere la necesidad de mantener un equilibrio entre la acción y la reflexión. Puede indicar la importancia de canalizar la energía de forma constructiva y evitar la impulsividad en las decisiones relacionadas con la salud.';
        $caballoB->posNeg = true;
        $caballoB->save();

        $sotaB = new Carta;
        $sotaB->nombre = 'Sota de Bastos';
        $sotaB->imagen = '/cartas/sota-bastos.jpg';
        $sotaB->significado = ' Representa la energía joven y emprendedora. Indica un mensaje o una oportunidad que se presenta de manera inesperada. Puede representar a una persona joven o enérgica que está lista para emprender nuevas aventuras.';
        $sotaB->amor = ' Indica la exploración y la aventura en una relación. Puede representar la curiosidad y el entusiasmo por descubrir nuevos aspectos de la pareja y compartir experiencias emocionantes juntos.';
        $sotaB->dinero = 'Simboliza el impulso y la iniciativa en el ámbito financiero. Indica la necesidad de estar atento a las oportunidades y tomar medidas audaces para avanzar en los objetivos económicos.';
        $sotaB->salud = 'Representa la vitalidad y la energía juvenil. Puede indicar un período de renovación y crecimiento personal, así como la disposición para explorar nuevas formas de mejorar la salud.';
        $sotaB->posNeg = true;
        $sotaB->save();

        $asB = new Carta;
        $asB->nombre = 'As de Bastos';
        $asB->imagen = '/cartas/1-bastos.jpg';
        $asB->significado = 'Este es el comienzo de la energía y la acción. Representa nuevos comienzos, oportunidades y aventuras emocionantes. Es el impulso inicial para llevar a cabo ideas y proyectos.';
        $asB->amor = 'Representa el inicio de una relación apasionada y emocionante. Puede indicar el comienzo de una nueva conexión amorosa llena de energía y entusiasmo.';
        $asB->dinero = 'Simboliza nuevas oportunidades financieras y proyectos emprendedores. Indica el potencial para el éxito y el crecimiento económico a través de la iniciativa y la acción.';
        $asB->salud = 'Representa un aumento en la vitalidad y la energía. Puede indicar un período de buena salud y vitalidad física, así como el impulso para emprender actividades físicas o deportivas.';
        $asB->posNeg = true;
        $asB->save();

        $dosB = new Carta;
        $dosB->nombre = 'Dos de Bastos';
        $dosB->imagen = '/cartas/2-bastos.jpg';
        $dosB->significado = 'Simboliza la planificación y la toma de decisiones. Puede indicar la necesidad de tomar el control y establecer metas claras. También puede representar la asociación y la colaboración.';
        $dosB->amor = 'Sugiere la necesidad de tomar decisiones en una relación. Puede indicar la exploración de nuevas direcciones en el amor y la necesidad de comunicación clara y compromiso.';
        $dosB->dinero = 'Indica la planificación y la preparación para futuros proyectos financieros. Puede representar la evaluación de opciones y la necesidad de establecer metas financieras claras.';
        $dosB->salud = 'Simboliza la necesidad de equilibrio y armonía en la vida. Puede indicar la importancia de cuidar tanto el cuerpo como la mente para mantener un bienestar óptimo.';
        $dosB->posNeg = null;
        $dosB->save();

        $tresB = new Carta;
        $tresB->nombre = 'Tres de Bastos';
        $tresB->imagen = '/cartas/3-bastos.jpg';
        $tresB->significado = ' Se refiere a la expansión y el crecimiento. Indica la anticipación de resultados positivos y el éxito a largo plazo. Puede representar la exploración de nuevas posibilidades y la búsqueda de oportunidades.';
        $tresB->amor = 'Representa la expansión y el crecimiento en una relación. Puede indicar la exploración de nuevas posibilidades juntos y la anticipación de un futuro emocionante.';
        $tresB->dinero = ' Indica el éxito en proyectos financieros a largo plazo. Puede representar la realización de inversiones inteligentes y la expansión de oportunidades económicas.';
        $tresB->salud = 'Sugiere la necesidad de mantener una visión positiva y optimista sobre la salud. Puede indicar la superación de obstáculos y la recuperación de la vitalidad física.';
        $tresB->posNeg = true;
        $tresB->save();

        $cuatroB = new Carta;
        $cuatroB->nombre = 'Cuatro de Bastos';
        $cuatroB->imagen = '/cartas/4-bastos.jpg';
        $cuatroB->significado = 'Representa la celebración y la armonía. Indica la celebración de logros y eventos importantes en la vida. Puede sugerir estabilidad y seguridad en el hogar y en las relaciones.';
        $cuatroB->amor = 'Simboliza la estabilidad y la celebración en una relación. Puede indicar la consolidación de compromisos y la celebración de hitos importantes juntos.';
        $cuatroB->dinero = 'Representa la seguridad financiera y el éxito en el hogar y el trabajo. Indica la estabilidad económica y la realización de metas financieras a largo plazo.';
        $cuatroB->salud = ' Sugiere un período de bienestar y equilibrio. Puede indicar la necesidad de mantener rutinas saludables y disfrutar de la estabilidad emocional.';
        $cuatroB->posNeg = true;
        $cuatroB->save();

        $cincoB = new Carta;
        $cincoB->nombre = 'Cinco de Bastos';
        $cincoB->imagen = '/cartas/5-bastos.jpg';
        $cincoB->significado = 'Simboliza la competencia y los desafíos. Indica la necesidad de superar obstáculos y resolver conflictos. Puede representar la lucha por alcanzar metas y la competencia con otros.';
        $cincoB->amor = 'Indica desafíos y conflictos en una relación. Puede representar la necesidad de resolver diferencias y trabajar en equipo para superar obstáculos.';
        $cincoB->dinero = 'Sugiere competencia y rivalidad en el ámbito laboral. Puede indicar la necesidad de enfrentar desafíos y defender tus intereses en el trabajo.';
        $cincoB->salud = 'Representa tensiones y conflictos internos. Puede indicar la importancia de gestionar el estrés y buscar formas saludables de expresar emociones.';
        $cincoB->posNeg = false;
        $cincoB->save();

        $seisB = new Carta;
        $seisB->nombre = 'Seis de Bastos';
        $seisB->imagen = '/cartas/6-bastos.jpg';
        $seisB->significado = 'Es el triunfo y el reconocimiento. Indica el éxito y la victoria en situaciones desafiantes. Puede representar el reconocimiento público y el aplauso por los logros alcanzados.';
        $seisB->amor = 'Simboliza el éxito y el reconocimiento en una relación. Puede indicar el logro de metas compartidas y el apoyo mutuo en momentos de triunfo.';
        $seisB->dinero = 'Indica el reconocimiento y la recompensa por el trabajo duro. Representa el éxito financiero y la superación de obstáculos en el camino hacia el logro de metas económicas.';
        $seisB->salud = 'Sugiere la superación de desafíos y la recuperación del bienestar. Puede indicar la necesidad de celebrar los logros y mantener una actitud positiva hacia la salud.';
        $seisB->posNeg = true;
        $seisB->save();

        $sieteB = new Carta;
        $sieteB->nombre = 'Siete de Bastos';
        $sieteB->imagen = '/cartas/7-bastos.jpg';
        $sieteB->significado = 'Representa la defensa y la determinación. Indica la resistencia contra la oposición y la lucha por lo que es importante. Puede sugerir la necesidad de mantenerse firme en las propias convicciones.';
        $sieteB->amor = 'Representa la defensa de los valores y la lealtad en una relación. Puede indicar la necesidad de establecer límites claros y defender tus creencias para mantener la armonía.';
        $sieteB->dinero = 'Indica la lucha por mantener el control financiero y defender tus intereses económicos. Puede representar la necesidad de ser firme en las negociaciones y proteger tus recursos.';
        $sieteB->salud = 'Sugiere la necesidad de defender tu bienestar físico y emocional. Puede indicar la importancia de establecer límites saludables y proteger tu energía de influencias negativas.';
        $sieteB->posNeg = true;
        $sieteB->save();

        $ochoB = new Carta;
        $ochoB->nombre = 'Ocho de Bastos';
        $ochoB->imagen = '/cartas/8-bastos.jpg';
        $ochoB->significado = 'Simboliza el movimiento rápido y la acción. Indica la llegada de noticias o eventos inesperados. Puede representar el viaje, los cambios repentinos y la acción rápida.';
        $ochoB->amor = 'Simboliza la pasión y el impulso en una relación. Puede indicar un período de romance y emociones intensas, así como comunicación fluida y expresión abierta de sentimientos.';
        $ochoB->dinero = 'Representa oportunidades y avances rápidos en el ámbito financiero. Indica la llegada de noticias o proyectos que impulsan el crecimiento económico y la expansión.';
        $ochoB->salud = 'Sugiere un aumento en la vitalidad y la energía física. Puede indicar un período de actividad frenética, por lo que es importante mantener el equilibrio y la moderación.';
        $ochoB->posNeg = true;
        $ochoB->save();

        $nueveB = new Carta;
        $nueveB->nombre = 'Nueve de Bastos';
        $nueveB->imagen = '/cartas/9-bastos.jpg';
        $nueveB->significado = 'Es la perseverancia y la resistencia. Indica la superación de los desafíos y la preparación para la batalla final. Puede representar la fortaleza y la determinación para seguir adelante a pesar de las dificultades.';
        $nueveB->amor = 'Indica la perseverancia y la resistencia en una relación. Puede representar la superación de desafíos y la preparación para defender el amor propio y los límites personales.';
        $nueveB->dinero = 'Simboliza la protección de los recursos financieros y la preparación para los contratiempos. Puede indicar la necesidad de ser cauto con las inversiones y proteger los activos existentes.';
        $nueveB->salud = 'Representa la necesidad de cuidar la salud física y mental. Puede indicar la importancia de establecer límites saludables y buscar apoyo en momentos difíciles.';
        $nueveB->posNeg = null;
        $nueveB->save();

        $diezB = new Carta;
        $diezB->nombre = 'Diez de Bastos';
        $diezB->imagen = '/cartas/10-bastos.jpg';
        $diezB->significado = 'Representa la carga y el esfuerzo excesivo. Indica la sensación de estar abrumado por responsabilidades o preocupaciones. Puede sugerir la necesidad de delegar tareas o liberarse de cargas innecesarias.';
        $diezB->amor = 'Simboliza la carga emocional y las responsabilidades en una relación. Puede indicar la necesidad de compartir las cargas y trabajar juntos para superar desafíos y obstáculos.';
        $diezB->dinero = 'Representa la sensación de estar abrumado por las responsabilidades financieras. Indica la necesidad de evaluar las prioridades y simplificar las tareas para aliviar la carga económica.';
        $diezB->salud = 'Sugiere la necesidad de liberarse del estrés y las preocupaciones. Puede indicar la importancia de buscar apoyo emocional y delegar tareas para evitar el agotamiento.';
        $diezB->posNeg = false;
        $diezB->save();

    }

    public function Oros() {
        $reina = new Carta;
        $reina->nombre = 'Reina de Oros';
        $reina->imagen = '/cartas/reina-oros.jpg';
        $reina->significado = 'Simboliza una mujer práctica, estable y segura financieramente. Sugiere la capacidad de administrar recursos de manera eficiente, así como la generosidad y la seguridad en uno mismo.';
        $reina->amor = 'Simboliza la estabilidad y la armonía en una relación. Sugiere la importancia de la conexión emocional y la generosidad en el amor.';
        $reina->dinero = 'Simboliza la seguridad y la abundancia material. Sugiere la gestión prudente de los recursos y la prosperidad en el ámbito económico.';
        $reina->salud = 'Simboliza la estabilidad y el equilibrio en la salud. Sugiere la importancia de la prevención y el autocuidado para mantener una buena salud.';
        $reina->posNeg = true;
        $reina->save();

        $rey = new Carta;
        $rey->nombre = 'Rey de Oros';
        $rey->imagen = '/cartas/rey-oros.jpg';
        $rey->significado = 'Representa un hombre exitoso, maduro y seguro de sí mismo en asuntos financieros. Sugiere liderazgo, autoridad y estabilidad en el ámbito material, así como la capacidad de tomar decisiones sabias y pragmáticas.';
        $rey->amor = 'Representa el compromiso y la protección en una relación. Sugiere la capacidad de proporcionar seguridad y apoyo emocional en el amor.';
        $rey->dinero = 'Representa el éxito financiero y la seguridad material. Sugiere la capacidad de tomar decisiones sabias y pragmáticas en asuntos financieros.';
        $rey->salud = 'Representa la fortaleza y la resistencia física. Sugiere la capacidad de superar los desafíos de salud y mantener un estado físico óptimo.';
        $rey->posNeg = true;
        $rey->save();

        $caballo = new Carta;
        $caballo->nombre = 'Caballero de Oros';
        $caballo->imagen = '/cartas/caballo-oros.jpg';
        $caballo->significado = 'Indica un individuo trabajador, confiable y ambicioso. Sugiere el éxito a través del esfuerzo y la determinación en el trabajo, así como la búsqueda de la excelencia y el progreso material.';
        $caballo->amor = 'Indica compromiso y lealtad en una relación. Sugiere la importancia de la confianza y la seguridad emocional en el amor.';
        $caballo->dinero = 'Indica estabilidad financiera y éxito profesional. Sugiere la realización de metas financieras y el progreso en la carrera.';
        $caballo->salud = 'Indica la importancia del cuidado del cuerpo y el mantenimiento de la salud. Sugiere la necesidad de adoptar hábitos saludables y evitar el exceso de trabajo.';
        $caballo->posNeg = true;
        $caballo->save();

        $sota = new Carta;
        $sota->nombre = 'Sota de Oros';
        $sota->imagen = '/cartas/sota-oros.jpg';
        $sota->significado = 'Representa un joven trabajador y diligente. Sugiere el comienzo de proyectos laborales o financieros, así como el aprendizaje y el crecimiento en el ámbito profesional.';
        $sota->amor = 'Representa el comienzo de una relación estable y segura. Sugiere el interés en construir una base sólida para el amor y la relación a largo plazo.';
        $sota->dinero = 'Representa nuevas oportunidades financieras y el comienzo de un proyecto rentable. Sugiere el éxito y el crecimiento en el ámbito económico.';
        $sota->salud = 'Representa la vitalidad y la energía en el cuerpo físico. Sugiere el inicio de un período de buena salud y bienestar físico.';
        $sota->posNeg = true;
        $sota->save();

        $as = new Carta;
        $as->nombre = 'As de Oros';
        $as->imagen = '/cartas/1-oros.jpg';
        $as->significado = 'Representa nuevos comienzos y oportunidades financieras. Sugiere éxito material, abundancia y prosperidad en el futuro.';
        $as->amor = 'Representa un nuevo comienzo en el amor y la estabilidad emocional. Puede indicar el inicio de una relación sólida y duradera, basada en la confianza y el compromiso mutuo.';
        $as->dinero = 'Simboliza oportunidades financieras y éxito material. Indica el potencial para el crecimiento económico y la realización de metas financieras a largo plazo.';
        $as->salud = 'Sugiere un período de buena salud y bienestar físico. Puede indicar el inicio de un nuevo enfoque en la salud y el bienestar, así como la necesidad de cuidar el cuerpo y la mente.';
        $as->posNeg = true;
        $as->save();

        $dos = new Carta;
        $dos->nombre = 'Dos de Oros';
        $dos->imagen = '/cartas/2-oros.jpg';
        $dos->significado = 'Simboliza equilibrio y adaptabilidad en situaciones económicas. Puede indicar la necesidad de gestionar recursos de manera eficiente y ser flexible en la toma de decisiones financieras.';
        $dos->amor = 'Representa la necesidad de equilibrar múltiples aspectos de la vida, lo que puede afectar las relaciones. Sugiere la importancia de la flexibilidad y la adaptabilidad en el amor.';
        $dos->dinero = 'Indica la necesidad de manejar las finanzas con cuidado y evitar el derroche. Sugiere la importancia de la planificación y la organización financiera.';
        $dos->salud = 'Simboliza la necesidad de mantener el equilibrio entre el trabajo y el descanso para preservar la salud física y mental.';
        $dos->posNeg = null;
        $dos->save();

        $tres = new Carta;
        $tres->nombre = 'Tres de Oros';
        $tres->imagen = '/cartas/3-oros.jpg';
        $tres->significado = 'Indica trabajo en equipo y colaboración para lograr metas materiales. Sugiere reconocimiento por habilidades y logros laborales.';
        $tres->amor = 'Representa la colaboración y la cooperación en una relación. Sugiere la importancia de trabajar juntos para superar desafíos y alcanzar metas compartidas en el amor.';
        $tres->dinero = 'Indica el reconocimiento y la recompensa por el trabajo duro y la dedicación. Sugiere la importancia de la perseverancia y la habilidad en el trabajo para lograr el éxito financiero.';
        $tres->salud = 'Simboliza la importancia de buscar consejo y orientación profesional para mejorar la salud y el bienestar. Sugiere la necesidad de aprender nuevas habilidades y técnicas para mantener un estilo de vida saludable.';
        $tres->posNeg = true;
        $tres->save();

        $cuatro = new Carta;
        $cuatro->nombre = 'Cuatro de Oros';
        $cuatro->imagen = '/cartas/4-oros.jpg';
        $cuatro->significado = 'Representa seguridad y estabilidad financiera. Puede indicar la necesidad de proteger y conservar recursos, así como el miedo a perder lo que se tiene.';
        $cuatro->amor = 'Sugiere la necesidad de abrirse emocionalmente en una relación y dejar ir el apego al control. Indica la importancia de la confianza y la vulnerabilidad en el amor.';
        $cuatro->dinero = 'Representa la necesidad de equilibrar la seguridad financiera con la generosidad y la gratitud. Sugiere la importancia de encontrar un equilibrio entre ahorrar y compartir recursos.';
        $cuatro->salud = 'Indica la importancia de liberarse de preocupaciones y tensiones innecesarias para preservar la salud física y mental. Sugiere la necesidad de practicar el desapego emocional y el autocuidado.';
        $cuatro->posNeg = true;
        $cuatro->save();

        $cinco = new Carta;
        $cinco->nombre = 'Cinco de Oros';
        $cinco->imagen = '/cartas/5-oros.jpg';
        $cinco->significado = 'Simboliza dificultades financieras y escasez. Puede indicar la necesidad de superar obstáculos económicos y buscar apoyo en momentos difíciles.';
        $cinco->amor = 'Representa la sensación de pérdida y abandono en una relación. Sugiere la importancia de buscar apoyo y consuelo en momentos difíciles y mantener la esperanza en el amor.';
        $cinco->dinero = 'Indica dificultades financieras y la necesidad de superar obstáculos económicos. Sugiere la importancia de buscar ayuda y buscar soluciones creativas para resolver problemas financieros.';
        $cinco->salud = 'Simboliza la necesidad de cuidar la salud física y emocional durante períodos de dificultad y estrés. Sugiere la importancia de mantener una actitud positiva y buscar ayuda profesional si es necesario.';
        $cinco->posNeg = false;
        $cinco->save();

        $seis = new Carta;
        $seis->nombre = 'Seis de Oros';
        $seis->imagen = '/cartas/6-oros.jpg';
        $seis->significado = 'Indica generosidad y caridad. Sugiere la posibilidad de recibir ayuda o beneficios financieros de fuentes externas.';
        $seis->amor = 'Representa la generosidad y la reciprocidad en una relación. Sugiere la importancia de compartir y dar apoyo mutuo en el amor.';
        $seis->dinero = 'Indica éxito y prosperidad financiera. Sugiere la posibilidad de recibir ayuda económica o beneficios financieros inesperados.';
        $seis->salud = 'Simboliza la estabilidad y el bienestar físico y emocional. Sugiere la importancia de mantener un equilibrio entre dar y recibir para preservar la salud.';
        $seis->posNeg = true;
        $seis->save();

        $siete = new Carta;
        $siete->nombre = 'Siete de Oros';
        $siete->imagen = '/cartas/7-oros.jpg';
        $siete->significado = 'Representa paciencia y espera por resultados positivos en inversiones o proyectos. Sugiere la necesidad de mantenerse enfocado en metas a largo plazo.';
        $siete->amor = 'Sugiere la necesidad de paciencia y perseverancia en una relación. Indica la importancia de trabajar en la relación a largo plazo y superar desafíos juntos.';
        $siete->dinero = 'Representa la inversión de tiempo y esfuerzo en proyectos financieros a largo plazo. Sugiere la posibilidad de cosechar recompensas y beneficios en el futuro.';
        $siete->salud = 'Indica la importancia de cuidar el bienestar físico y emocional a largo plazo. Sugiere la necesidad de adoptar hábitos saludables y mantener una actitud positiva hacia la salud.';
        $siete->posNeg = null;
        $siete->save();

        $ocho = new Carta;
        $ocho->nombre = 'Ocho de Oros';
        $ocho->imagen = '/cartas/8-oros.jpg';
        $ocho->significado = 'Simboliza dedicación y habilidad en el trabajo. Puede indicar el éxito a través del esfuerzo y la dedicación en actividades laborales o proyectos creativos.';
        $ocho->amor = 'Sugiere dedicación y compromiso en una relación. Representa la importancia de trabajar en la relación y mejorarla a través del esfuerzo y la dedicación mutuos.';
        $ocho->dinero = 'Indica el éxito y la recompensa por el trabajo duro y la dedicación en el trabajo. Sugiere la posibilidad de alcanzar metas financieras y profesionales a través del esfuerzo constante.';
        $ocho->salud = 'Simboliza la necesidad de concentrarse en el bienestar físico y mental. Sugiere la importancia de mantenerse enfocado en metas saludables y seguir un plan de autocuidado.';
        $ocho->posNeg = true;
        $ocho->save();

        $nueve = new Carta;
        $nueve->nombre = 'Nueve de Oros';
        $nueve->imagen = '/cartas/9-oros.jpg';
        $nueve->significado = 'Indica independencia financiera y logro de metas personales. Sugiere disfrutar de la recompensa por el trabajo arduo y la capacidad de cuidar de uno mismo.';
        $nueve->amor = 'Representa la independencia y la autosuficiencia en una relación. Sugiere la importancia de mantener la individualidad y la libertad en el amor.';
        $nueve->dinero = 'Indica seguridad financiera y éxito material. Sugiere la capacidad de disfrutar de la estabilidad económica y el confort material.';
        $nueve->salud = 'Simboliza la autoestima y el bienestar personal. Sugiere la importancia de cuidarse a sí mismo y buscar la felicidad y el bienestar interior.';
        $nueve->posNeg = True;
        $nueve->save();

        $diez = new Carta;
        $diez->nombre = 'Diez de Oros';
        $diez->imagen = '/cartas/10-oros.jpg';
        $diez->significado = 'Representa la realización material y la seguridad familiar. Sugiere la herencia, la estabilidad financiera y el logro de la prosperidad a largo plazo.';
        $diez->amor = 'Simboliza la armonía y la felicidad en la familia y las relaciones domésticas. Puede indicar estabilidad y seguridad en el ámbito emocional, así como la celebración de lazos familiares fuertes y duraderos.';
        $diez->dinero = 'Representa la riqueza material y la seguridad financiera. Indica el éxito en los asuntos financieros y la acumulación de bienes materiales. Puede sugerir la realización de metas económicas y la prosperidad en el hogar.';
        $diez->salud = 'Sugiere una buena salud y bienestar en el hogar y la familia. Puede indicar la importancia de mantener un equilibrio entre el trabajo y la vida familiar, así como la necesidad de cuidar la salud emocional y física de todos los miembros de la familia.';
        $diez->posNeg = True;
        $diez->save();
    }

    public function Espadas() {
        $reina = new Carta;
        $reina->nombre = 'Reina de Espadas';
        $reina->imagen = '/cartas/reina-espadas.jpg';
        $reina->significado = 'Indica inteligencia, lógica, y la capacidad de comunicarse de manera clara y racional. Puede representar el liderazgo o la autoridad en situaciones difíciles.';
        $reina->amor = 'Indica la inteligencia y la lógica en una relación. Puede representar la necesidad de comunicarse de manera clara y racional para resolver conflictos y fortalecer la conexión emocional.';
        $reina->dinero = 'Simboliza la sabiduría y la planificación en asuntos financieros. Puede indicar la necesidad de tomar decisiones basadas en la razón y la experiencia para lograr estabilidad económica';
        $reina->salud = 'Representa la capacidad de enfrentar desafíos de salud con inteligencia y determinación. Puede indicar la necesidad de buscar soluciones prácticas y mantener una actitud positiva hacia el bienestar.';
        $reina->posNeg = null;
        $reina->save();

        $rey = new Carta;
        $rey->nombre = 'Rey de Espadas';
        $rey->imagen = '/cartas/rey-espadas.jpg';
        $rey->significado = 'Simboliza el poder mental, la sabiduría, y la capacidad de tomar decisiones difíciles con objetividad y claridad.';
        $rey->amor = 'Sugiere la autoridad y el liderazgo en una relación. Puede indicar la necesidad de tomar decisiones difíciles y establecer límites para mantener la armonía y el respeto mutuo.';
        $rey->dinero = 'Simboliza la claridad mental y la determinación en asuntos financieros. Puede indicar la necesidad de ser objetivo y firme en la gestión de recursos y toma de decisiones económicas.';
        $rey->salud = 'Indica la capacidad de enfrentar desafíos de salud con fortaleza y perspicacia. Puede representar la necesidad de buscar soluciones efectivas y mantener un enfoque racional hacia el bienestar físico y emocional.';
        $rey->posNeg = null;
        $rey->save();

        $caballo = new Carta;
        $caballo->nombre = 'Caballero de Espadas';
        $caballo->imagen = '/cartas/caballo-espadas.jpg';
        $caballo->significado = 'Sugiere acción, valentía, y la búsqueda de la verdad o la justicia. Puede indicar la necesidad de tomar medidas audaces.';
        $caballo->amor = 'Simboliza la acción rápida y decidida en una relación. Puede indicar la necesidad de tomar medidas audaces para resolver problemas y proteger la conexión emocional.';
        $caballo->dinero = 'Representa la toma de decisiones rápidas y estratégicas en asuntos financieros. Puede indicar la necesidad de ser valiente y decidido en la búsqueda de oportunidades económicas.';
        $caballo->salud = 'Sugiere la necesidad de enfrentar desafíos de salud con valentía y determinación. Puede representar la importancia de buscar soluciones efectivas y tomar medidas preventivas para mantener la salud.';
        $caballo->posNeg = false;
        $caballo->save();

        $sota = new Carta;
        $sota->nombre = 'Sota de Espadas';
        $sota->imagen = '/cartas/sota-espadas.jpg';
        $sota->significado = 'Representa la juventud, la curiosidad intelectual, y la búsqueda de conocimiento o información.';
        $sota->amor = 'Representa la comunicación clara y directa en una relación. Puede indicar la necesidad de expresar honestamente tus pensamientos y sentimientos para resolver conflictos y fortalecer la conexión.';
        $sota->dinero = 'Sugiere nuevas ideas y enfoques en asuntos financieros. Puede indicar la necesidad de ser ingenioso y adaptable para superar desafíos y encontrar oportunidades de crecimiento económico.';
        $sota->salud = 'Indica la necesidad de enfrentar la verdad y buscar respuestas claras en cuestiones de salud. Puede representar la necesidad de ser proactivo en la búsqueda de soluciones para mejorar el bienestar físico y emocional.';
        $sota->posNeg = true;
        $sota->save();

        $as = new Carta;
        $as->nombre = 'As de Espadas';
        $as->imagen = '/cartas/1-espadas.jpg';
        $as->significado = 'Representa nuevas ideas, claridad mental, y la oportunidad de enfrentar la verdad o tomar decisiones importantes.';
        $as->amor = 'Representa la claridad y la verdad en una relación. Puede indicar la necesidad de comunicación abierta y honesta para resolver conflictos.';
        $as->dinero = 'Sugiere nuevas ideas y oportunidades en el ámbito financiero. Puede indicar la necesidad de tomar decisiones claras y objetivas en asuntos económicos.';
        $as->salud = 'Indica la necesidad de cuidar la salud mental y emocional. Puede representar la superación de obstáculos mentales y el inicio de un nuevo camino hacia el bienestar.';
        $as->posNeg = true;
        $as->save();

        $dos = new Carta;
        $dos->nombre = 'Dos de Espadas';
        $dos->imagen = '/cartas/2-espadas.jpg';
        $dos->significado = 'Simboliza la indecisión, la necesidad de hacer una elección difícil o encontrar un equilibrio entre dos opciones opuestas.';
        $dos->amor = 'Simboliza la indecisión y el estancamiento en una relación. Puede indicar la necesidad de tomar decisiones difíciles y enfrentar conflictos internos.';
        $dos->dinero = 'Representa la incertidumbre y la falta de claridad en asuntos financieros. Puede indicar la necesidad de analizar cuidadosamente las opciones antes de tomar decisiones importantes.';
        $dos->salud = 'Sugiere la necesidad de enfrentar miedos y preocupaciones para encontrar la paz mental. Puede representar la importancia de buscar orientación y apoyo para superar desafíos emocionales.';
        $dos->posNeg = null;
        $dos->save();

        $tres = new Carta;
        $tres->nombre = 'Tres de Espadas';
        $tres->imagen = '/cartas/3-espadas.jpg';
        $tres->significado = 'Indica dolor emocional, pérdida, o traición. Puede representar la necesidad de enfrentar y sanar heridas del pasado.';
        $tres->amor = 'Indica el dolor y la tristeza en una relación. Puede representar la ruptura de una relación o la traición emocional.';
        $tres->dinero = 'Sugiere pérdidas financieras y dificultades económicas. Puede indicar la necesidad de ajustar el presupuesto y tomar medidas para recuperarse de contratiempos financieros.';
        $tres->salud = 'Representa la angustia emocional y el sufrimiento. Puede indicar la necesidad de cuidar la salud mental y buscar apoyo para superar la pena y el dolor.';
        $tres->posNeg = false;
        $tres->save();

        $cuatro = new Carta;
        $cuatro->nombre = 'Cuatro de Espadas';
        $cuatro->imagen = '/cartas/4-espadas.jpg';
        $cuatro->significado = 'Sugiere descanso, recuperación, y reflexión. Puede indicar la necesidad de tomar un tiempo para recuperarse mental y emocionalmente.';
        $cuatro->amor = 'Simboliza el descanso y la paz en una relación. Puede indicar la necesidad de tomarse un tiempo para reflexionar y sanar después de conflictos o desafíos.';
        $cuatro->dinero = 'Representa la estabilidad financiera y la planificación cuidadosa. Puede indicar la necesidad de crear un plan sólido para asegurar el futuro financiero.';
        $cuatro->salud = 'Indica la necesidad de descanso y recuperación. Puede representar la importancia de cuidar la salud física y mental para evitar el agotamiento.';
        $cuatro->posNeg = true;
        $cuatro->save();

        $cinco = new Carta;
        $cinco->nombre = 'Cinco de Espadas';
        $cinco->imagen = '/cartas/5-espadas.jpg';
        $cinco->significado = 'Representa el conflicto, la discordia, y la necesidad de superar desafíos o confrontar situaciones difíciles.';
        $cinco->amor = 'ndica conflictos y desacuerdos en una relación. Puede representar la necesidad de establecer límites y resolver diferencias de manera constructiva.';
        $cinco->dinero = 'Sugiere competencia y rivalidad en el ámbito financiero. Puede indicar la necesidad de defender tus intereses y no permitir que otros te aprovechen.';
        $cinco->salud = 'Representa la tensión y el estrés. Puede indicar la importancia de manejar el estrés de manera saludable y buscar formas de relajarse y encontrar equilibrio.';
        $cinco->posNeg = false;
        $cinco->save();

        $seis = new Carta;
        $seis->nombre = 'Seis de Espadas';
        $seis->imagen = '/cartas/6-espadas.jpg';
        $seis->significado = 'Simboliza el viaje, el movimiento hacia adelante, y la superación de dificultades. Puede indicar una transición hacia un lugar mejor.';
        $seis->amor = 'Simboliza el movimiento y la transición en una relación. Puede indicar la necesidad de dejar atrás el pasado y buscar un nuevo comienzo juntos.';
        $seis->dinero = 'Indica la superación de desafíos financieros y la búsqueda de soluciones a largo plazo. Puede representar el viaje hacia la estabilidad económica y la seguridad.';
        $seis->salud = 'Sugiere la recuperación y el avance hacia una mejor salud. Puede indicar la necesidad de dejar atrás hábitos poco saludables y adoptar un enfoque más positivo hacia el bienestar.';
        $seis->posNeg = true;
        $seis->save();

        $siete = new Carta;
        $siete->nombre = 'Siete de Espadas';
        $siete->imagen = '/cartas/7-espadas.jpg';
        $siete->significado = 'Indica engaño, decepción, o la necesidad de ser cauteloso y protegerse de personas o situaciones problemáticas.';
        $siete->amor = 'Representa la deshonestidad y la traición en una relación. Puede indicar la necesidad de ser honesto y transparente para evitar conflictos y malentendidos.';
        $siete->dinero = 'Indica el engaño y la manipulación en asuntos financieros. Puede representar la necesidad de ser cauteloso con las inversiones y proteger tus intereses.';
        $siete->salud = 'Sugiere la necesidad de enfrentar la verdad y aceptar las consecuencias de tus acciones. Puede indicar la importancia de cuidar la salud mental y emocional.';
        $siete->posNeg = false;
        $siete->save();

        $ocho = new Carta;
        $ocho->nombre = 'Ocho de Espadas';
        $ocho->imagen = '/cartas/8-espadas.jpg';
        $ocho->significado = 'Sugiere limitación, sentirse atrapado o incapaz de ver una solución clara. Puede indicar la necesidad de cambiar la perspectiva.';
        $ocho->amor = 'Simboliza la sensación de estar atrapado o limitado en una relación. Puede indicar la necesidad de confrontar miedos y limitaciones para lograr la libertad emocional.';
        $ocho->dinero = 'Representa obstáculos y desafíos en el camino hacia la estabilidad financiera. Puede indicar la necesidad de superar barreras y buscar soluciones creativas para mejorar la situación.';
        $ocho->salud = 'Indica sentimientos de ansiedad y confusión. Puede representar la necesidad de buscar apoyo y orientación para superar obstáculos y encontrar claridad.';
        $ocho->posNeg = false;
        $ocho->save();

        $nueve = new Carta;
        $nueve->nombre = 'Nueve de Espadas';
        $nueve->imagen = '/cartas/9-espadas.jpg';
        $nueve->significado = 'Representa ansiedad, miedo, o preocupación excesiva. Puede indicar la necesidad de enfrentar y superar temores irracionales.';
        $nueve->amor = 'Indica preocupaciones y miedos en una relación. Puede representar la necesidad de comunicarse abierta y honestamente sobre las preocupaciones para encontrar soluciones juntos.';
        $nueve->dinero = 'Sugiere ansiedad y estrés relacionados con asuntos financieros. Puede indicar la necesidad de desarrollar una estrategia para manejar las preocupaciones y tomar decisiones financieras sólidas.';
        $nueve->salud = 'Simboliza la angustia mental y el insomnio. Puede representar la necesidad de buscar ayuda profesional para abordar problemas de salud mental y encontrar paz interior.';
        $nueve->posNeg = false;
        $nueve->save();

        $diez = new Carta;
        $diez->nombre = 'Diez de Espadas';
        $diez->imagen = '/cartas/10-espadas.png';
        $diez->significado = 'Simboliza la crisis, el colapso, o el final de una situación difícil. Puede indicar la necesidad de aceptar y dejar ir el pasado.';
        $diez->amor = 'Representa el final de una situación dolorosa o traumática en una relación. Puede indicar la necesidad de dejar ir el pasado y abrirse a nuevas oportunidades de amor y felicidad.';
        $diez->dinero = 'Indica la culminación de problemas financieros o deudas pendientes. Puede representar la necesidad de aprender de los errores pasados y buscar formas de recuperarse financieramente.';
        $diez->salud = 'Simboliza la superación de enfermedades o crisis de salud. Puede indicar la necesidad de cuidar la salud mental y emocional después de tiempos difíciles.';
        $diez->posNeg = false;
        $diez->save();
    }

    public function Copas() {
        $reina = new Carta;
        $reina->nombre = 'Reina de Copas';
        $reina->imagen = '/cartas/reina-copas.jpg';
        $reina->significado = 'Representa la compasión, la empatía y la sensibilidad emocional. Puede indicar una persona amorosa, intuitiva y receptiva a las necesidades de los demás.';
        $reina->amor = 'Representa la compasión, la empatía y la sensibilidad en el amor. Puede indicar la necesidad de conectarse emocionalmente con los demás y ofrecer apoyo y comprensión en las relaciones.';
        $reina->dinero = 'Simboliza la generosidad y la abundancia emocional que contribuyen positivamente a la estabilidad financiera. Puede indicar la importancia de mantener una actitud generosa y receptiva hacia el dinero y las posesiones materiales.';
        $reina->salud = 'Sugiere la necesidad de cuidar el bienestar emocional y promover la salud mental. Puede indicar la importancia de la introspección y la autoexpresión para mantener el equilibrio emocional y la salud.';
        $reina->posNeg = null;
        $reina->save();

        $rey = new Carta;
        $rey->nombre = 'Rey de Copas';
        $rey->imagen = '/cartas/rey-copas.jpg';
        $rey->significado = 'Simboliza el control emocional, la sabiduría y el liderazgo compasivo. Puede representar a alguien que ofrece apoyo emocional, orientación y comprensión a los demás.';
        $rey->amor = 'Indica el dominio emocional y la sabiduría en las relaciones. Puede representar la capacidad de manejar las emociones con madurez y ofrecer orientación y apoyo emocional a los demás.';
        $rey->dinero = 'Simboliza la estabilidad financiera basada en la intuición y el equilibrio emocional. Puede indicar la importancia de confiar en la intuición para tomar decisiones financieras y mantener un enfoque sereno y equilibrado hacia el dinero.';
        $rey->salud = 'Representa la armonía emocional y la salud mental que contribuyen positivamente al bienestar físico. Puede indicar la importancia de mantener una actitud tranquila y serena para promover la salud y el equilibrio emocional';
        $rey->posNeg = null;
        $rey->save();

        $caballo = new Carta;
        $caballo->nombre = 'Caballero de Copas';
        $caballo->imagen = '/cartas/caballo-copas.jpg';
        $caballo->significado = 'Sugiere romance, imaginación y la búsqueda del amor ideal. Puede indicar la llegada de mensajes emocionales, propuestas románticas o el inicio de un nuevo romance.';
        $caballo->amor = 'Simboliza la sensibilidad y el romanticismo en el amor. Puede indicar la llegada de noticias o invitaciones románticas, así como la necesidad de expresar los sentimientos con sinceridad y afecto.';
        $caballo->dinero = 'Indica la creatividad y la inspiración en asuntos financieros. Puede representar la búsqueda de oportunidades económicas basadas en la intuición y el entendimiento emocional.';
        $caballo->salud = 'ugiere la necesidad de mantener un equilibrio entre las emociones y la razón para promover la salud emocional y mental. Puede indicar la importancia de cuidar el bienestar emocional y buscar actividades creativas que promuevan la expresión personal y la satisfacción emocional.';
        $caballo->posNeg = true;
        $caballo->save();

        $sota = new Carta;
        $sota->nombre = 'Sota de Copas';
        $sota->imagen = '/cartas/sota-copas.jpg';
        $sota->significado = 'Indica sensibilidad, intuición y la exploración de las emociones. Puede representar una persona joven o una situación que estimula la creatividad y la expresión emocional.';
        $sota->amor = 'Representa la sensibilidad y la emotividad en el amor. Puede indicar la aparición de un nuevo amor o la expresión de sentimientos sinceros y profundos en una relación existente.';
        $sota->dinero = 'Simboliza el potencial creativo y emocional en asuntos financieros. Puede indicar la necesidad de explorar nuevas ideas y enfoques en el ámbito laboral y financiero.';
        $sota->salud = ' Sugiere la necesidad de escuchar y responder a las necesidades emocionales para promover la salud mental y emocional. Puede indicar la importancia de practicar la autocompasión y la autoaceptación para mantener el equilibrio emocional y la salud.';
        $sota->posNeg = true;
        $sota->save();

        $as = new Carta;
        $as->nombre = 'As de Copas';
        $as->imagen = '/cartas/1-copas.jpg';
        $as->significado = 'Representa nuevos comienzos emocionales, amor, alegría y satisfacción. Puede indicar un momento de renovación emocional y felicidad.';
        $as->amor = 'Representa el comienzo de una relación amorosa, emociones profundas y felicidad en el amor. Puede indicar el inicio de un romance significativo o el renacimiento de sentimientos en una relación existente.';
        $as->dinero = 'Sugiere nuevas oportunidades financieras que están en armonía con tus emociones y valores. Puede indicar la llegada de abundancia emocional y material.';
        $as->salud = 'Representa un estado emocional equilibrado que contribuye positivamente a la salud física y mental. Puede indicar un período de bienestar y armonía emocional que favorece la salud en general.';
        $as->posNeg = true;
        $as->save();

        $dos = new Carta;
        $dos->nombre = 'Dos de Copas';
        $dos->imagen = '/cartas/2-copas.jpg';
        $dos->significado = 'Simboliza la unión, la armonía y el amor compartido entre dos personas. Puede representar relaciones románticas, amistades profundas o asociaciones significativas.';
        $dos->amor = 'Simboliza la unión, la conexión emocional y el amor compartido. Puede indicar el fortalecimiento de los lazos emocionales en una relación existente o el inicio de una relación romántica significativa.';
        $dos->dinero = 'Representa asociaciones financieras beneficiosas y colaborativas. Puede indicar la colaboración en proyectos financieros o la armonía en cuestiones monetarias compartidas.';
        $dos->salud = 'Indica la importancia de la conexión emocional y el apoyo mutuo en la salud física y mental. Puede sugerir el cuidado de las relaciones significativas para promover el bienestar emocional.';
        $dos->posNeg = true;
        $dos->save();

        $tres = new Carta;
        $tres->nombre = 'Tres de Copas';
        $tres->imagen = '/cartas/3-copas.jpg';
        $tres->significado = 'Indica celebración, amistad y alegría compartida. Puede representar eventos felices, reuniones sociales o la conexión con los demás en un nivel emocional.';
        $tres->amor = 'Sugiere celebraciones, alegría compartida y camaradería en el amor. Puede indicar la celebración de hitos importantes en una relación o la reunión con amigos y seres queridos para celebrar el amor.';
        $tres->dinero = 'Representa el éxito financiero y la prosperidad compartida. Puede indicar el logro de metas financieras en equipo o la celebración de logros financieros significativos.';
        $tres->salud = 'Indica el apoyo social y emocional que contribuye positivamente a la salud. Puede representar la importancia de rodearse de amigos y seres queridos para promover el bienestar emocional y físico.';
        $tres->posNeg = true;
        $tres->save();

        $cuatro = new Carta;
        $cuatro->nombre = 'Cuatro de Copas';
        $cuatro->imagen = '/cartas/4-copas.jpg';
        $cuatro->significado = 'Sugiere insatisfacción, apatía o la falta de interés en las oportunidades presentes. Puede indicar la necesidad de buscar la inspiración y encontrar la gratitud en la vida.';
        $cuatro->amor = 'Sugiere insatisfacción emocional y desinterés en el amor. Puede indicar la necesidad de reflexionar sobre los sentimientos internos y buscar la gratitud en las relaciones existentes.';
        $cuatro->dinero = 'Representa la falta de interés en las oportunidades financieras presentes. Puede indicar la necesidad de evaluar las opciones financieras disponibles y encontrar la inspiración para perseguir nuevas oportunidades.';
        $cuatro->salud = 'Indica un estado emocional apático que puede afectar negativamente a la salud. Puede sugerir la importancia de abordar las emociones subyacentes para promover el bienestar físico y mental.';
        $cuatro->posNeg = null;
        $cuatro->save();

        $cinco = new Carta;
        $cinco->nombre = 'Cinco de Copas';
        $cinco->imagen = '/cartas/5-copas.jpg';
        $cinco->significado = 'Representa la pérdida, la tristeza y la decepción. Puede indicar la necesidad de aceptar y superar las dificultades emocionales para encontrar la esperanza y la renovación.';
        $cinco->amor = 'Representa la tristeza, la decepción y la pérdida en el amor. Puede indicar la necesidad de superar desilusiones pasadas y encontrar la esperanza en nuevas oportunidades emocionales.';
        $cinco->dinero = 'Sugiere desafíos financieros y pérdidas económicas. Puede indicar la necesidad de aceptar las dificultades financieras y buscar formas de recuperación y renovación.';
        $cinco->salud = 'Indica tensiones emocionales que pueden afectar negativamente a la salud. Puede representar la importancia de gestionar el estrés y buscar apoyo emocional para promover el bienestar físico y mental.';
        $cinco->posNeg = false;
        $cinco->save();

        $seis = new Carta;
        $seis->nombre = 'Seis de Copas';
        $seis->imagen = '/cartas/6-copas.jpg';
        $seis->significado = 'Simboliza la nostalgia, la gratitud y el regreso a la inocencia del pasado. Puede representar la conexión con la infancia, los recuerdos felices o la reconciliación emocional.';
        $seis->amor = 'Simboliza la nostalgia, la gratitud y la conexión con el pasado en el amor. Puede indicar la importancia de recordar experiencias positivas en relaciones pasadas y aplicar lecciones aprendidas en el presente.';
        $seis->dinero = 'Representa la seguridad emocional y financiera que proviene de la estabilidad del pasado. Puede indicar la influencia de la herencia familiar o la estabilidad financiera basada en la experiencia pasada.';
        $seis->salud = 'Sugiere la recuperación emocional y la conexión con la inocencia del pasado. Puede indicar la necesidad de cuidar el bienestar emocional y encontrar consuelo en recuerdos felices para promover la salud mental.';
        $seis->posNeg = true;
        $seis->save();

        $siete = new Carta;
        $siete->nombre = 'Siete de Copas';
        $siete->imagen = '/cartas/7-copas.jpg';
        $siete->significado = 'ndica ilusiones, opciones y fantasías. Puede representar la necesidad de discernir entre lo real y lo imaginario, y tomar decisiones basadas en la realidad.';
        $siete->amor = 'Indica ilusiones, fantasías y opciones en el amor. Puede indicar la necesidad de discernir entre la realidad y la imaginación en las relaciones y tomar decisiones basadas en la verdad.';
        $siete->dinero = 'Sugiere confusión y falta de claridad en cuestiones financieras. Puede indicar la presencia de opciones y oportunidades, pero también la importancia de evaluar cuidadosamente las opciones antes de tomar decisiones financieras.';
        $siete->salud = 'Representa la necesidad de mantenerse centrado y enfocado en la realidad para promover el bienestar emocional y físico. Puede indicar la importancia de establecer metas realistas y mantener una perspectiva equilibrada.';
        $siete->posNeg = false;
        $siete->save();

        $ocho = new Carta;
        $ocho->nombre = 'Ocho de Copas';
        $ocho->imagen = '/cartas/8-copas.jpg';
        $ocho->significado = 'Sugiere el abandono, la búsqueda de significado y la necesidad de encontrar un nuevo propósito en la vida. Puede indicar la necesidad de dejar atrás lo que ya no sirve y buscar la autenticidad emocional.';
        $ocho->amor = 'Simboliza el abandono emocional y la búsqueda de un nuevo camino en el amor. Puede indicar la necesidad de dejar atrás relaciones pasadas que ya no son satisfactorias y buscar una mayor realización emocional.';
        $ocho->dinero = 'Representa la renuncia a objetivos materiales en busca de una mayor satisfacción emocional. Puede indicar la necesidad de priorizar la felicidad y el bienestar emocional sobre el éxito material.';
        $ocho->salud = 'Sugiere el abandono de hábitos o situaciones que ya no contribuyen al bienestar emocional y físico. Puede indicar la importancia de dejar atrás el estrés y la negatividad para promover un estado de salud más equilibrado.';
        $ocho->posNeg = false;
        $ocho->save();

        $nueve = new Carta;
        $nueve->nombre = 'Nueve de Copas';
        $nueve->imagen = '/cartas/9-copas.jpg';
        $nueve->significado = 'Representa la satisfacción, la abundancia y la realización emocional. Puede indicar la consecución de los deseos, la gratitud y la alegría interior.';
        $nueve->amor = 'Indica satisfacción emocional y cumplimiento en el amor. Puede representar la realización de deseos y la armonía en las relaciones personales. Sugiere la celebración de la felicidad y el amor compartido.';
        $nueve->dinero = 'Simboliza la realización de metas financieras y la seguridad material. Puede indicar la satisfacción económica y la capacidad de disfrutar de los frutos del trabajo duro. Sugiere la celebración de logros financieros.';
        $nueve->salud = 'Representa la alegría y el bienestar emocional que contribuyen positivamente a la salud física y mental. Puede indicar la importancia de mantener una actitud positiva y disfrutar de la vida para promover la salud.';
        $nueve->posNeg = true;
        $nueve->save();

        $diez = new Carta;
        $diez->nombre = 'Diez de Copas';
        $diez->imagen = '/cartas/10-copas.jpg';
        $diez->significado = 'Simboliza la felicidad, la armonía familiar y la realización emocional. Puede representar la plenitud en el amor, la familia y las relaciones significativas.';
        $diez->amor = 'Simboliza la felicidad, la plenitud y la armonía familiar en el amor. Puede indicar la realización de la felicidad emocional y la realización de los lazos familiares. Sugiere la celebración de la unión y la paz en las relaciones personales.';
        $diez->dinero = 'Indica la abundancia emocional y material que proviene de relaciones sólidas y satisfactorias. Puede representar la realización de metas financieras y la estabilidad económica basada en la felicidad y el bienestar emocional.';
        $diez->salud = 'Sugiere un estado de equilibrio emocional que contribuye positivamente a la salud física y mental. Puede indicar la importancia de mantener relaciones armoniosas y buscar la felicidad en todas las áreas de la vida para promover la salud.';
        $diez->posNeg = true;
        $diez->save();
    }

    public function Signos() {

        $capricornio = new Signo;
        $capricornio->nombre = 'Capricornio';
        $capricornio->descripcion = 'Eres conocido por tu determinación y ambición, Capricornio. Tu enfoque en tus metas te lleva a ser muy trabajador y persistente en todo lo que haces. Tienes una gran capacidad para organizar y planificar, lo que te ayuda a alcanzar el éxito en tus proyectos. Sin embargo, a veces puedes ser un poco reservado y distante, lo que puede dificultar que otros se acerquen a ti. Recuerda equilibrar tu dedicación al trabajo con momentos de descanso y diversión para cuidar tu bienestar emocional.';
        $capricornio->save();

        $acuario = new Signo;
        $acuario->nombre = 'Acuario';
        $acuario->descripcion = 'Eres conocido por tu originalidad y tu mente abierta, Acuario. Tu capacidad para pensar fuera de lo convencional te hace destacar en cualquier entorno. Eres un humanitario comprometido y te preocupas profundamente por el bienestar de los demás y por el progreso de la sociedad en su conjunto. Sin embargo, a veces puedes ser un poco rebelde y reacio a seguir las normas establecidas, lo que puede llevarte a enfrentarte a desafíos en tus relaciones personales y profesionales. Recuerda ser compasivo y considerado con los demás mientras persigues tus ideales.';
        $acuario->save();

        $piscis = new Signo;
        $piscis->nombre = 'Piscis';
        $piscis->descripcion = 'Eres conocido por tu sensibilidad y tu compasión, Piscis. Tu intuición te permite sintonizar con las emociones de los demás y ofrecer apoyo cuando más se necesita. Eres un soñador creativo y tienes una imaginación vívida que te lleva a explorar nuevas ideas y experiencias. Sin embargo, a veces puedes ser un poco idealista y escapista, lo que puede llevarte a evitar enfrentarte a la realidad o a tomar decisiones difíciles. Recuerda mantener un equilibrio entre tus sueños y la realidad, y busca apoyo cuando lo necesites para mantener tu bienestar emocional.';
        $piscis->save();

        $aries = new Signo;
        $aries->nombre = 'Aries';
        $aries->descripcion = 'Eres conocido por tu valentía y tu energía, Aries. Tu espíritu pionero te lleva a buscar nuevas aventuras y a tomar decisiones audaces en la vida. Eres un líder natural y no temes enfrentarte a desafíos difíciles. Sin embargo, a veces puedes ser impulsivo y actuar sin pensar en las consecuencias, lo que puede llevarte a meterte en problemas. Recuerda tomarte un tiempo para reflexionar antes de actuar y considerar cómo tus acciones afectarán a ti y a los demás.';
        $aries->save();

        $tauro = new Signo;
        $tauro->nombre = 'Tauro';
        $tauro->descripcion = 'Eres conocido por tu lealtad y tu determinación, Tauro. Tu dedicación y tu resistencia te hacen perseverar incluso en las situaciones más difíciles. Eres práctico y trabajador, y disfrutas de las cosas simples y placenteras de la vida. Sin embargo, a veces puedes ser un poco terco y obstinado, lo que puede dificultar que te adaptes a los cambios o que aceptes nuevas ideas. Recuerda ser flexible y estar abierto a nuevas experiencias para crecer y desarrollarte como persona.';
        $tauro->save();

        $geminis = new Signo;
        $geminis->nombre = 'Géminis';
        $geminis->descripcion = 'Eres conocido por tu versatilidad y tu ingenio, Géminis. Tu mente ágil te permite adaptarte fácilmente a diferentes situaciones y encontrar soluciones creativas a los problemas. Eres curioso y te encanta aprender cosas nuevas, lo que te lleva a explorar una amplia gama de intereses y pasatiempos. Sin embargo, a veces puedes ser un poco superficial y disperso, lo que puede dificultar que te comprometas totalmente con una sola actividad o relación. Recuerda enfocarte en lo que realmente te importa y cultivar relaciones profundas y significativas en tu vida.';
        $geminis->save();

        $cancer = new Signo;
        $cancer->nombre = 'Cáncer';
        $cancer->descripcion = 'Eres conocido por tu sensibilidad y tu protección, Cáncer. Tu intuición te permite sintonizar con las emociones de los demás y ofrecer apoyo cuando más se necesita. Eres leal y cariñoso, y te preocupas profundamente por tus seres queridos. Sin embargo, a veces puedes ser un poco emocional y sensible, lo que puede llevarte a preocuparte demasiado o a sentirte abrumado por tus emociones. Recuerda cuidar de ti mismo y establecer límites saludables para proteger tu bienestar emocional mientras cuidas de los demás.';
        $cancer->save();

        $leo = new Signo;
        $leo->nombre = 'Leo';
        $leo->descripcion = 'Eres conocido por tu generosidad y tu carisma, Leo. Tu confianza y tu espíritu positivo te hacen destacar en cualquier situación. Eres un líder natural y sabes cómo inspirar y motivar a los demás. Sin embargo, a veces puedes ser un poco arrogante y egocéntrico, lo que puede llevarte a ser un poco dominante o autoritario en tus relaciones personales y profesionales. Recuerda ser humilde y considerado con los demás, y permitir que otros también brillen a tu alrededor.';
        $leo->save();

        $virgo = new Signo;
        $virgo->nombre = 'Virgo';
        $virgo->descripcion = 'Eres conocido por tu meticulosidad y tu atención al detalle, Virgo. Tu capacidad para analizar y organizar te hace ser muy eficiente en todo lo que haces. Eres práctico y trabajador, y te esfuerzas por alcanzar la perfección en todo lo que emprendes. Sin embargo, a veces puedes ser un poco crítico contigo mismo y con los demás, lo que puede llevarte a ser un poco exigente o perfeccionista. Recuerda ser compasivo y aceptar que todos tenemos nuestras fortalezas y debilidades.';
        $virgo->save();

        $libra = new Signo;
        $libra->nombre = 'Libra';
        $libra->descripcion = 'Eres conocido por tu diplomacia y tu equilibrio, Libra. Tu habilidad para ver todas las perspectivas te hace ser un buen mediador y negociador en situaciones conflictivas. Eres justo y objetivo, y te esfuerzas por mantener la armonía en tus relaciones personales y profesionales. Sin embargo, a veces puedes ser un poco indeciso y vacilante, lo que puede dificultar que tomes decisiones difíciles o que te comprometas totalmente con una causa. Recuerda confiar en tus instintos y en tu intuición para guiarte en el camino correcto.';
        $libra->save();

        $escorpio = new Signo;
        $escorpio->nombre = 'Escorpio';
        $escorpio->descripcion = 'Eres conocido por tu intensidad y tu pasión, Escorpio. Tu capacidad para profundizar en las emociones te hace ser muy intuitivo y perceptivo. Eres leal y comprometido en tus relaciones personales y te esfuerzas por descubrir la verdad en todas las situaciones. Sin embargo, a veces puedes ser un poco posesivo y celoso, lo que puede llevar a conflictos en tus relaciones. Recuerda dar espacio a tus seres queridos y confiar en ellos para que también puedan crecer y desarrollarse.';
        $escorpio->save();

        $sagitario = new Signo;
        $sagitario->nombre = 'Sagitario';
        $sagitario->descripcion = 'Eres conocido por tu optimismo y tu aventura, Sagitario. Tu espíritu libre te lleva a buscar nuevas experiencias y a expandir tus horizontes en la vida. Eres generoso y amigable, y disfrutas compartiendo tus experiencias y conocimientos con los demás. Sin embargo, a veces puedes ser un poco imprudente y descuidado, lo que puede llevarte a meter la pata o a meterte en situaciones peligrosas. Recuerda mantener un equilibrio entre la exploración y la responsabilidad, y cuidar tu bienestar mientras persigues tus sueños.';
        $sagitario->save();

    }

    public function Horoscopos(){

        $diarioCapricornio = new Horoscopo;
        $diarioCapricornio->signo = 1;
        $diarioCapricornio->descripcion = 'Hoy es un día para concentrarte en tus metas y objetivos, Capricornio. Tu determinación y enfoque te ayudarán a superar cualquier obstáculo que encuentres en tu camino. Aprovecha tu energía positiva para avanzar hacia el éxito en tus proyectos y aspiraciones. No temas pedir ayuda si la necesitas, y recuerda cuidar también de tu bienestar emocional.';
        $diarioCapricornio->formato = 'diario';
        $diarioCapricornio->fecha = '2024-04-15';
        $diarioCapricornio->save();

        $semanalCapricornio = new Horoscopo;
        $semanalCapricornio->signo = 1;
        $semanalCapricornio->descripcion = 'Esta semana es importante que te enfoques en tus relaciones personales, Capricornio. Dedica tiempo y atención a tus seres queridos y cultiva conexiones significativas. Tu capacidad para comunicarte claramente y expresar tus sentimientos te ayudará a fortalecer tus vínculos y crear armonía en tu vida. No tengas miedo de abrirte y compartir tus pensamientos y emociones con los demás.';
        $semanalCapricornio->formato = 'semanal';
        $semanalCapricornio->fecha = '2024-04-15';
        $semanalCapricornio->save();

        $mensualCapricornio = new Horoscopo;
        $mensualCapricornio->signo = 1;
        $mensualCapricornio->descripcion = 'Este mes es el momento perfecto para enfocarte en tu crecimiento personal y desarrollo, Capricornio. Dedica tiempo a reflexionar sobre tus metas y aspiraciones a largo plazo, y crea un plan para alcanzarlas. Confía en tu intuición y sigue tu corazón en tus decisiones. No tengas miedo de tomar riesgos calculados y explorar nuevas oportunidades. Mantén una actitud positiva y abierta, y estarás en el camino hacia el éxito.';
        $mensualCapricornio->formato = 'mensual';
        $mensualCapricornio->fecha = '2024-04-01';
        $mensualCapricornio->save();

        $diarioAcuario = new Horoscopo;
        $diarioAcuario->signo = 2;
        $diarioAcuario->descripcion = 'Hoy es un buen día para enfocarte en tus relaciones personales, Acuario. Es posible que te encuentres en una etapa de reflexión y evaluación, lo que te permitirá entender mejor tus propias necesidades y las de los demás. Aprovecha esta oportunidad para fortalecer los lazos con tus seres queridos y cultivar conexiones más profundas.';
        $diarioAcuario->formato = 'diario';
        $diarioAcuario->fecha = '2024-04-15';
        $diarioAcuario->save();

        $semanalAcuario = new Horoscopo;
        $semanalAcuario->signo = 2;
        $semanalAcuario->descripcion = 'Esta semana te sentirás más centrado y enfocado en tus metas y objetivos, Acuario. Es posible que te encuentres con nuevas oportunidades para crecer y expandirte, tanto a nivel personal como profesional. Mantén una mentalidad abierta y flexible, y estarás listo para aprovechar al máximo las oportunidades que se te presenten.';
        $semanalAcuario->formato = 'semanal';
        $semanalAcuario->fecha = '2024-04-15';
        $semanalAcuario->save();

        $mensualAcuario = new Horoscopo;
        $mensualAcuario->signo = 2;
        $mensualAcuario->descripcion = 'Este mes será un momento de auto-reflexión y exploración interior, Acuario. Es posible que te sientas más conectado contigo mismo y con tu intuición, lo que te permitirá tomar decisiones más sabias y conscientes. Aprovecha este tiempo para profundizar en tu práctica espiritual y nutrir tu crecimiento personal.';
        $mensualAcuario->formato = 'mensual';
        $mensualAcuario->fecha = '2024-04-01';
        $mensualAcuario->save();

        $diarioPiscis = new Horoscopo;
        $diarioPiscis->signo = 3;
        $diarioPiscis->descripcion = 'Hoy es un buen día para dedicar tiempo a tu creatividad y expresión artística, Piscis. Puedes sentirte inspirado y motivado para explorar nuevas formas de expresarte, ya sea a través del arte, la música, la escritura u otras formas de creatividad. Confía en tu intuición y déjate llevar por la corriente creativa.';
        $diarioPiscis->formato = 'diario';
        $diarioPiscis->fecha = '2024-04-15';
        $diarioPiscis->save();

        $semanalPiscis = new Horoscopo;
        $semanalPiscis->signo = 3;
        $semanalPiscis->descripcion = 'Esta semana te sentirás más conectado con tu mundo interior, Piscis. Puedes experimentar una mayor sensibilidad emocional y una profunda comprensión de tus propias necesidades y deseos. Aprovecha este tiempo para nutrir tu alma y explorar tu mundo interior.';
        $semanalPiscis->formato = 'semanal';
        $semanalPiscis->fecha = '2024-04-15';
        $semanalPiscis->save();

        $mensualPiscis = new Horoscopo;
        $mensualPiscis->signo = 3;
        $mensualPiscis->descripcion = 'Este mes será un período de introspección y auto-descubrimiento, Piscis. Puedes sentir la necesidad de retirarte un poco del mundo exterior para explorar tus propios pensamientos, sentimientos y sueños. Dedica tiempo a la meditación, la reflexión y la autoevaluación.';
        $mensualPiscis->formato = 'mensual';
        $mensualPiscis->fecha = '2024-04-01';
        $mensualPiscis->save();

        $diarioAries = new Horoscopo;
        $diarioAries->signo = 4;
        $diarioAries->descripcion = 'Hoy es un día para tomar la iniciativa y enfrentar los desafíos con coraje, Aries. Confía en tu instinto y no temas tomar decisiones audaces. Tu determinación te llevará lejos.';
        $diarioAries->formato = 'diario';
        $diarioAries->fecha = '2024-04-15';
        $diarioAries->save();

        $semanalAries = new Horoscopo;
        $semanalAries->signo = 4;
        $semanalAries->descripcion = 'Esta semana puedes sentirte impulsado a liderar y marcar la pauta, Aries. Aprovecha tu energía y entusiasmo para inspirar a los demás y lograr grandes avances en tus metas.';
        $semanalAries->formato = 'semanal';
        $semanalAries->fecha = '2024-04-15';
        $semanalAries->save();

        $mensualAries = new Horoscopo;
        $mensualAries->signo = 4;
        $mensualAries->descripcion = 'Este mes estarás lleno de energía y determinación para alcanzar tus objetivos, Aries. No temas dar pasos audaces y buscar nuevas oportunidades para crecer y expandirte.';
        $mensualAries->formato = 'mensual';
        $mensualAries->fecha = '2024-04-01';
        $mensualAries->save();

        $diarioTauro = new Horoscopo;
        $diarioTauro->signo = 5;
        $diarioTauro->descripcion = 'Hoy es un día para conectar con tu serenidad interior y disfrutar de las cosas simples de la vida, Tauro. Dedica tiempo a cuidar de ti mismo y a apreciar las bendiciones que te rodean.';
        $diarioTauro->formato = 'diario';
        $diarioTauro->fecha = '2024-04-15';
        $diarioTauro->save();

        $semanalTauro = new Horoscopo;
        $semanalTauro->signo = 5;
        $semanalTauro->descripcion = 'Esta semana puedes sentir la necesidad de buscar estabilidad y seguridad en tu vida, Tauro. Aprovecha tu determinación y persistencia para construir bases sólidas para tu futuro.';
        $semanalTauro->formato = 'semanal';
        $semanalTauro->fecha = '2024-04-15';
        $semanalTauro->save();

        $mensualTauro = new Horoscopo;
        $mensualTauro->signo = 5;
        $mensualTauro->descripcion = 'Este mes estarás enfocado en asegurar tu bienestar y estabilidad, Tauro. Dedica tiempo a construir una base sólida para tus metas y a cultivar relaciones significativas en tu vida.';
        $mensualTauro->formato = 'mensual';
        $mensualTauro->fecha = '2024-04-01';
        $mensualTauro->save();

        $diarioGeminis = new Horoscopo;
        $diarioGeminis->signo = 6;
        $diarioGeminis->descripcion = 'Hoy es un día para explorar nuevas ideas y mantener una mente abierta, Géminis. Tu curiosidad te llevará a descubrir nuevas perspectivas y oportunidades de crecimiento.';
        $diarioGeminis->formato = 'diario';
        $diarioGeminis->fecha = '2024-04-15';
        $diarioGeminis->save();

        $semanalGeminis = new Horoscopo;
        $semanalGeminis->signo = 6;
        $semanalGeminis->descripcion = 'Esta semana puedes sentir la necesidad de comunicarte claramente y expresar tus ideas, Géminis. Aprovecha tu habilidad para conectar con los demás y construir relaciones significativas.';
        $semanalGeminis->formato = 'semanal';
        $semanalGeminis->fecha = '2024-04-15';
        $semanalGeminis->save();

        $mensualGeminis = new Horoscopo;
        $mensualGeminis->signo = 6;
        $mensualGeminis->descripcion = 'Este mes estarás lleno de energía y entusiasmo para explorar nuevas oportunidades y aventuras, Géminis. No temas salir de tu zona de confort y seguir tus intereses.';
        $mensualGeminis->formato = 'mensual';
        $mensualGeminis->fecha = '2024-04-01';
        $mensualGeminis->save();

        $diarioCancer = new Horoscopo;
        $diarioCancer->signo = 7;
        $diarioCancer->descripcion = 'Hoy es un día para conectarte con tus emociones y cuidar de tu bienestar emocional, Cáncer. Dedica tiempo a ti mismo y a tus seres queridos para cultivar relaciones significativas.';
        $diarioCancer->formato = 'diario';
        $diarioCancer->fecha = '2024-04-15';
        $diarioCancer->save();

        $semanalCancer = new Horoscopo;
        $semanalCancer->signo = 7;
        $semanalCancer->descripcion = 'Esta semana puedes sentir la necesidad de encontrar seguridad y confort en tu entorno, Cáncer. Aprovecha tu intuición para tomar decisiones sabias y proteger tu bienestar.';
        $semanalCancer->formato = 'semanal';
        $semanalCancer->fecha = '2024-04-15';
        $semanalCancer->save();

        $mensualCancer = new Horoscopo;
        $mensualCancer->signo = 7;
        $mensualCancer->descripcion = 'Este mes estarás enfocado en nutrir tus relaciones personales y encontrar seguridad emocional, Cáncer. Dedica tiempo a crear un ambiente cálido y acogedor en tu hogar.';
        $mensualCancer->formato = 'mensual';
        $mensualCancer->fecha = '2024-04-01';
        $mensualCancer->save();

        $diarioLeo = new Horoscopo;
        $diarioLeo->signo = 8;
        $diarioLeo->descripcion = 'Hoy es un día para brillar y mostrar tu creatividad, Leo. Confía en tu intuición y deja que tu luz interior ilumine a los demás. Es un momento propicio para liderar y destacarte en lo que haces.';
        $diarioLeo->formato = 'diario';
        $diarioLeo->fecha = '2024-04-15';
        $diarioLeo->save();

        $semanalLeo = new Horoscopo;
        $semanalLeo->signo = 8;
        $semanalLeo->descripcion = 'Esta semana puedes sentir la necesidad de expresar tu individualidad y destacarte en tu entorno, Leo. Confía en tu capacidad para liderar y motivar a los demás hacia el éxito.';
        $semanalLeo->formato = 'semanal';
        $semanalLeo->fecha = '2024-04-15';
        $semanalLeo->save();

        $mensualLeo = new Horoscopo;
        $mensualLeo->signo = 8;
        $mensualLeo->descripcion = 'Este mes estarás lleno de energía y entusiasmo para perseguir tus metas y aspiraciones, Leo. Aprovecha tu creatividad y confianza en ti mismo para alcanzar el éxito en tus proyectos.';
        $mensualLeo->formato = 'mensual';
        $mensualLeo->fecha = '2024-04-01';
        $mensualLeo->save();

        $diarioVirgo = new Horoscopo;
        $diarioVirgo->signo = 9;
        $diarioVirgo->descripcion = 'Hoy es un día para enfocarte en los detalles y la organización, Virgo. Dedica tiempo a planificar tus tareas y asegurarte de que todo esté en orden. Tu precisión te llevará al éxito.';
        $diarioVirgo->formato = 'diario';
        $diarioVirgo->fecha = '2024-04-15';
        $diarioVirgo->save();

        $semanalVirgo = new Horoscopo;
        $semanalVirgo->signo = 9;
        $semanalVirgo->descripcion = 'Esta semana puedes sentir la necesidad de perfeccionar tu entorno y mejorar tus habilidades, Virgo. Aprovecha tu atención al detalle para resolver cualquier problema que surja.';
        $semanalVirgo->formato = 'semanal';
        $semanalVirgo->fecha = '2024-04-15';
        $semanalVirgo->save();

        $mensualVirgo = new Horoscopo;
        $mensualVirgo->signo = 9;
        $mensualVirgo->descripcion = 'Este mes estarás enfocado en mejorar tu bienestar físico y mental, Virgo. Dedica tiempo a cuidar tu salud y encontrar un equilibrio entre el trabajo y el descanso.';
        $mensualVirgo->formato = 'mensual';
        $mensualVirgo->fecha = '2024-04-01';
        $mensualVirgo->save();

        $diarioLibra = new Horoscopo;
        $diarioLibra->signo = 10;
        $diarioLibra->descripcion = 'Hoy es un día para buscar el equilibrio y la armonía en tus relaciones, Libra. Dedica tiempo a escuchar a los demás y encontrar soluciones pacíficas a cualquier conflicto que surja.';
        $diarioLibra->formato = 'diario';
        $diarioLibra->fecha = '2024-04-15';
        $diarioLibra->save();

        $semanalLibra = new Horoscopo;
        $semanalLibra->signo = 10;
        $semanalLibra->descripcion = 'Esta semana puedes sentir la necesidad de buscar la justicia y la equidad en tus acciones, Libra. Sé imparcial y objetivo al tomar decisiones importantes.';
        $semanalLibra->formato = 'semanal';
        $semanalLibra->fecha = '2024-04-15';
        $semanalLibra->save();

        $mensualLibra = new Horoscopo;
        $mensualLibra->signo = 10;
        $mensualLibra->descripcion = 'Este mes estarás enfocado en crear armonía y belleza en tu entorno, Libra. Aprovecha tu creatividad para embellecer tu vida y la de los demás.';
        $mensualLibra->formato = 'mensual';
        $mensualLibra->fecha = '2024-04-01';
        $mensualLibra->save();

        $diarioEscorpio = new Horoscopo;
        $diarioEscorpio->signo = 11;
        $diarioEscorpio->descripcion = 'Hoy es un día para explorar tus emociones más profundas y descubrir la verdad interior, Escorpio. Confía en tu intuición y sigue tu instinto en todas tus decisiones.';
        $diarioEscorpio->formato = 'diario';
        $diarioEscorpio->fecha = '2024-04-15';
        $diarioEscorpio->save();

        $semanalEscorpio = new Horoscopo;
        $semanalEscorpio->signo = 11;
        $semanalEscorpio->descripcion = 'Esta semana puedes sentir la necesidad de transformarte y renacer en diferentes aspectos de tu vida, Escorpio. Aprovecha esta energía para dejar atrás lo que ya no te sirve y abrazar nuevas oportunidades.';
        $semanalEscorpio->formato = 'semanal';
        $semanalEscorpio->fecha = '2024-04-15';
        $semanalEscorpio->save();

        $mensualEscorpio = new Horoscopo;
        $mensualEscorpio->signo = 11;
        $mensualEscorpio->descripcion = 'Este mes estarás enfocado en profundizar en tu conexión espiritual y emocional, Escorpio. Dedica tiempo a la introspección y la meditación para encontrar la paz interior.';
        $mensualEscorpio->formato = 'mensual';
        $mensualEscorpio->fecha = '2024-04-01';
        $mensualEscorpio->save();

        $diarioSagitario = new Horoscopo;
        $diarioSagitario->signo = 12;
        $diarioSagitario->descripcion = 'Hoy es un día para explorar nuevas ideas y expandir tus horizontes, Sagitario. Mantén una mente abierta y aventurera, y estarás listo para aprovechar las oportunidades que se presenten.';
        $diarioSagitario->formato = 'diario';
        $diarioSagitario->fecha = '2024-04-15';
        $diarioSagitario->save();

        $semanalSagitario = new Horoscopo;
        $semanalSagitario->signo = 12;
        $semanalSagitario->descripcion = 'Esta semana puedes sentir la necesidad de buscar la verdad y la sabiduría en tus experiencias, Sagitario. Aprovecha tu optimismo y entusiasmo para superar cualquier desafío que se presente.';
        $semanalSagitario->formato = 'semanal';
        $semanalSagitario->fecha = '2024-04-15';
        $semanalSagitario->save();

        $mensualSagitario = new Horoscopo;
        $mensualSagitario->signo = 12;
        $mensualSagitario->descripcion = 'Este mes estarás enfocado en expandir tus conocimientos y experiencias, Sagitario. Busca oportunidades para viajar, aprender y crecer en todos los aspectos de tu vida.';
        $mensualSagitario->formato = 'mensual';
        $mensualSagitario->fecha = '2024-04-01';
        $mensualSagitario->save();

    }
    
    public function usersDefault() {
        $administrador = new User;
        $administrador->username = 'admin_padron';
        $administrador->correo = 'admin@padron.com';
        $administrador->password = '1234';
        $administrador->estado = true;
        $administrador->fecha_nacimiento = '1999-01-01';
        $administrador->id_signo = 1;
        $administrador->rol= 'admin';
        $administrador->icono = '/profile_pic/blank.png';
        $administrador->save();

        $pitonisa = new User;
        $pitonisa->username = 'pito_nisa';
        $pitonisa->correo = 'pito_nisa@correo.com';
        $pitonisa->password = '1234';
        $pitonisa->estado = true;
        $pitonisa->fecha_nacimiento = '1999-01-01';
        $pitonisa->id_signo = 1;
        $pitonisa->rol= 'pitonisa';
        $pitonisa->icono = '/profile_pic/blank.png';
        $pitonisa->save();

    }
    public function run(): void
    {
        
       
        self::ArcanosMayores();
        $this->command->info('Arcanos mayores guardados con éxito');
        self::Bastos();
        $this->command->info('Bastos guardados con éxito');
        self::Oros();
        $this->command->info('Oros guardados con éxito');
        self::Espadas();
        $this->command->info('Espadas guardados con éxito');
        self::Copas();
        $this->command->info('Copas guardados con éxito');
        self::Signos();
        $this->command->info('Signos creados con éxito');
        self::Horoscopos();
        $this->command->info('Horoscopos creados con éxito');
        self::usersDefault();
        $this->command->info('Usuarios creados con éxito');
        
        

       /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
    }
}
