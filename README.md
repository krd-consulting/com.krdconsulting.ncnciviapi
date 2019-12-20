# com.krdconsulting.ncnciviapi
Custom CiviCRM API 3.0 endpoints and actions for The Nonprofit Centers Network.

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Usage
Text enclosed in [square brackets] are placeholders.

### Create or update (and associate external purchase to the contact)
```
https://ncn-dev.hellokrd.net/sites/all/modules/civicrm/extern/rest.php?entity=Contact&action=findorcreate&api_key=[given_api_key]&key=[site_key]&json={"contact_type":"Individual","first_name":"[Alfred]","last_name":"[Pennyworth]", "email": "[alfred@wayne.net]", "api.Activity.create":{"source_contact_id":"$value.id","activity_type_id":"External Purchase","custom_22":"[purchase_id]","custom_23":"[Price]","custom_24":"[Description here.]"} }
```

## Requirements

* PHP v7.0+
* CiviCRM (5.13)
* CiviCRM APIv3

## Installation (Web UI)

This extension has not yet been published for installation via the web UI.

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl com.krdconsulting.ncnciviapi@https://github.com/FIXME/com.krdconsulting.ncnciviapi/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/krd-consulting/com.krdconsulting.ncnciviapi.git
cv en ncnciviapi
```
