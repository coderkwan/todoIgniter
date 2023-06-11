# I simple todo, built in code Igniter 4
![](/public/assets/1.png "screenshot")
Run it on your mechine;
- clone the repo,
- config the database inside `app/Config/Database.php`
	- Because I faled to run migrations *( yes code ignighter sucks mostly with their error handling )*. You must create a table manually ( tableName: "todo", colums: ['id' = int, 'todo' = text, 'complete' = int])
- run `php spark serve`
- check *localhost:8080*