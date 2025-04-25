# Calico Budget Management

This budget app was built to make shopping easier by listing the products that need to be purchased, allowing for easy filtering based on when it needs to be bought, and the shop where it needs to be purchased from!

![image](https://i.imgur.com/sZg6xwm.png)

### Key Features
- List Products/Items
- Set product Status, Price, Shop, Category and Due
- Filter items based on Status, Shop and Due
- Adjustable Income field to show amount left in budget
- Mobile responsive for easy use in the shops!

![image](https://i.imgur.com/0MZmjdv.png)

### Installtion

Clone the Repo
```
git clone https://github.com/GhostSixty6/calico-budget.git
```

Copy and modify the .env file
```
cp .env.example .env && code .env
```

Start the container
```
docker-compose up -d
```

Setup the database
```
docker-compose exec app php artisan key:generate && docker-compose exec app php artisan config:cache
```
```
docker-compose exec app php artisan migrate:fresh --seed
```

## Technical Stack

### Backend
- Framework: [Laravel](https://laravel.com/) (PHP 8.3)
- Database: MariaDB/MySQL
- Container: Docker

### Frontend
- Framework: [TailwindCSS](http://tailwindcss.com/)
- Select Fields: [Choices.js](https://github.com/Choices-js/Choices)

## License

[MIT](https://choosealicense.com/licenses/mit/)



## Courtesy of [r/DadJokes](https://www.reddit.com/r/dadjokes/)

I met a microbiologist this morning. 

```
He was a lot bigger than I thought.
```
