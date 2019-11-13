<?php
use CRM_Ncnciviapi_ExtensionUtil as E;

/**
 * Contact.FindOrCreate API specification (optional)
 * This is used for documentation and validation.
 *
 * @param array $spec description of fields supported by this API call
 *
 * @see https://docs.civicrm.org/dev/en/latest/framework/api-architecture/
 */
function _civicrm_api3_contact_findorcreate_spec(&$spec) {
  $spec['contact_type']['api.required'] = 1;
  $spec['first_name']['api.required'] = 1;
  $spec['last_name']['api.required'] = 1;
  $spec['email']['api.required'] = 1;
  $spec['activity']['api.required'] = 1;
}

/**
 * Contact.FindOrCreate API
 *
 * Queries for an individual using first_name, last_name, and email and creates a contact if
 * no contacts are returned. 
 *
 * @param array $params
 *
 * @return array
 *   API result descriptor
 *
 * @see civicrm_api3_create_success
 *
 */
function civicrm_api3_contact_findorcreate($params) {
 
	$result = civicrm_api3('Contact', 'get', [
    'contact_type' => $params['contact_type'],
    'first_name' => $params['first_name'],
    'last_name' => $params['last_name'],
  	'email' => $params['email'],
		'options' => ['limit' => 1]
 	]);	


	if($result['count'] == 0) {


		$result = civicrm_api3('Contact', 'create', [
      'version'=> 3,
			'contact_type' => $params['contact_type'],
      'first_name' => $params['first_name'],
      'last_name' => $params['last_name'],
			'api.Email.create' => ['email' => $params['email']],
		]);
	
	}

	// Spec: civicrm_api3_create_success($values = 1, $params = [], $entity = NULL, $action = NULL)
	return civicrm_api3_create_success($result['values'], $params, 'Contact', 'findorcreate');
}
