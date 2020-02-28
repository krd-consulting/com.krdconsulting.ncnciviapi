# com.krdconsulting.ncnciviapi
Custom CiviCRM API 3.0 endpoints and actions for The Nonprofit Centers Network.


## Usage
Text enclosed in [square brackets] are placeholders.

### Create or update contact (and associate external purchase to the contact)
```
https://ncn-dev.hellokrd.net/sites/all/modules/civicrm/extern/rest.php?entity=Contact&action=findorcreate&api_key=[given_api_key]&key=[site_key]&json={"contact_type":"Individual","first_name":"[Alfred]","last_name":"[Pennyworth]", "email": "[alfred@wayne.net]", "api.Activity.create":{"source_contact_id":"$value.id","activity_type_id":"External Purchase","custom_22":"[purchase_id]","custom_23":"[Price]","custom_24":"[Description here.]"} }
```

## Requirements

* PHP v7.0+
* CiviCRM 5.13+
* CiviCRM API v3
