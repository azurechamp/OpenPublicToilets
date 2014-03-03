<?php

function taleem_theme() {
  return array(

    'attendancereport_node_form' => array(
      'arguments' => array('form' => NULL),
      'template' => 'attendance-report-form',
    ),

    'quizreport_node_form' => array(
	      'arguments' => array('form' => NULL),
	      'template' => 'quiz-report-form',
    ),
	'examreport_node_form' => array(
		  'arguments' => array('form' => NULL),
		  'template' => 'exam-report-form',
    ),
    'parent_node_form' => array(
		  'arguments' => array('form' => NULL),
		  'template' => 'parent-form',
    ),
    'datesheet_node_form' => array(
		  'arguments' => array('form' => NULL),
		  'template' => 'datesheet-form',
    ),
	'school_node_form' => array(
		  'arguments' => array('form' => NULL),
		  'template' => 'school-form',
	),
	'academy_node_form' => array(
		  'arguments' => array('form' => NULL),
		  'template' => 'academy-form',
	),
	'college_node_form' => array(
		  'arguments' => array('form' => NULL),
		  'template' => 'college-form',
	),
	'tutor_node_form' => array(
		  'arguments' => array('form' => NULL),
		  'template' => 'tutor-form',
	),
	'branch_node_form' => array(
		  'arguments' => array('form' => NULL),
		  'template' => 'branch-form',
	),
    'user_register' => array(
       	'arguments' => array('form' => NULL),
      	'template' => 'user-register',
    ),
  );
}

if ($link['in_active_trail'])
    $link['options']['attributes']['class'] .=  ' active';