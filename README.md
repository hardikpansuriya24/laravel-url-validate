## Setup Project

Please use ssh or https methods for pull project cloan in your local machin.

After project setup done in local machin. please following step for configure project in your local envierment.

- Run command "composer install"

After composer packages installed in your local machine. then need to run 

- Run command "php artisan serve"

## Task detail

- Please check url validate function in following contoller file app\Http\ControllersTestController.php there is validateUrl function you can check.
- There i used Http client library for get url details.
- rescue function is used for wrapper around the HTTP request for always receive a response object and can safely go ahead to verify its status.
- retry function is used for HTTP client to automatically retry the request if a client or server error occurs.  The retry method accepts the maximum number of times the request should be attempted and the number of milliseconds.

## Response

- If url found and we connect successfully then we get following response.
  ![image](https://user-images.githubusercontent.com/118823606/209770657-44210724-6956-4f8b-b52e-087102236c1a.png)


- If url not found then it will retun with false.
  ![image](https://user-images.githubusercontent.com/118823606/209770727-6aaa2bf4-2292-44b1-8193-3ff5669c0878.png)


