<?php

namespace Website\Controllers;

/**
 * Class HomeController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class WebsiteController
{




	public function main()
	{

		$template_engine = get_template_engine();
		echo $template_engine->render('main');
	}

	public function project($id, $url) {
		$project = getProject($id);
		$images  = getProjectImages($id);
		$methods  = getProjectMethods($id);

		$template_engine = get_template_engine();
		echo $template_engine->render('project', ['project' => $project, 'images' => $images, 'methods' => $methods]);
	}

	public function main2()
	{

		$template_engine = get_template_engine();
		echo $template_engine->render('main2');
	}

	public function handleContactForm(){
		$from_name = $_POST['from_name'];
		$from_email = filter_var($_POST['from_email'], FILTER_VALIDATE_EMAIL);
		$from_subject = $_POST['from_subject'];
		$from_message = $_POST['from_message'];


		$mailer = getSwiftMailer();

		$message = createEmailMessage('info@joeyvdkuijl.nl', 'Contact form van de website', $from_name, $from_email );

		$message->setBody(
            '<html>' .
                ' <body> ' .
                ' <strong>Het contactformulier is ingevuld en het volgende is verstuurd:</strong>' .
                ' <p>Naam: ' . $from_name . '</p> ' .
				' <p>Email: ' . $from_email . '</p> ' .
				' <p>Subject: ' . $from_subject . '</p> ' .
                ' <p>Bericht: ' . $from_message . '</p> ' .
                ' </body> ' .
                ' </html>',
            'text/html'
        );

		$aantal_verstuurd = $mailer->send($message);

		$url = url('main2') . '	#contact';
		redirect($url);
	}
}