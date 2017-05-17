<?php 
/**
 * The file for JSON to generate audio from text.
 *
 * @link       http://lougiequisel.com/
 * @since      1.0.0
 *
 * @package    Polly
 * @subpackage Polly/includes
 */
require_once('../../../../../wp-load.php');
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'libraries/php-lib-polly/vendor/autoload.php';

// $text = ($_GET['text']) ? $_GET['text'] : '';
// $api_call = new Polly_API_Call();

// $audio = ($text) ?  $api_call->convert_text_to_audio('This is only a test') : 0;

// echo json_encode($audio);


$file = (new nickolanack\Polly(
			array(
			    'region'  => 'us-west-2',
			    'version' => 'latest',
			    'credentials'=>array('key'=>'AKIAIERNK7SRRSLLH2OA',
			    'secret'=>'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')
			)
		))->setVoice('Brian')->textToSpeach("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.");

// $result = $client->synthesizeSpeech([
//     'OutputFormat' => 'mp3', // REQUIRED
//     'Text' => 'This is a sample Text', // REQUIRED
//     'TextType' => 'text',
//     'VoiceId' => 'Geraint', // REQUIRED
// ]);

//var_dump($file);

//This works on MacOs
shell_exec('afplay '.escapeshellarg($file).' &');