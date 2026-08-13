<?php
require_once('../../config.php');
require_login();

$PAGE->set_url(new moodle_url('/local/testdeploy/index.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('pluginname', 'local_testdeploy'));
$PAGE->set_heading(get_string('pluginname', 'local_testdeploy'));

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('hello', 'local_testdeploy'));

// Afficher les infos du plugin pour confirmer le déploiement
$plugin = new stdClass();
require(__DIR__ . '/version.php');

echo html_writer::start_tag('ul');
echo html_writer::tag('li', 'Composant : ' . $plugin->component);
echo html_writer::tag('li', 'Version : ' . $plugin->version);
echo html_writer::tag('li', 'Release : ' . $plugin->release);
echo html_writer::tag('li', 'Déployé le : ' . date('Y-m-d H:i:s'));
echo html_writer::tag('li', 'Serveur : ' . php_uname('n'));
echo html_writer::end_tag('ul');

echo $OUTPUT->footer();
