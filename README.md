# Simandhiri
### Information
  - Plugin Name: Simandhiri.
  - Plugin URI: .
  - Description: self-service book circulation plugin.
  - Version: 1.0.0.
  - Author: Ocinz/Ahmad Hafid.
  - Author URI: [LinkedIn](https://www.linkedin.com/in/ahmad-hafid/)
### - User Guide:
- Download and extract this repository.
- Copy simandhiri folder to __YOUR_SLIMS_DIRECTORY_/plugins/
- Copy this line of code to __YOUR_SLIMS_DIRECTORY_/api/v1/route.php, after
  ```
  \SLiMS\Plugins::getInstance()->execute('custom_api_route', ['router' => $router]);
  ```
- code
  ```
  \SLiMS\Plugins::getInstance()->execute('simandhiri-api', ['router' => $router]);
  ```
- Last, login as admin and activate the plugin in System->Plugins.

 Note: Simandhiri and Simandhiri API need to be activated
