## Laravel Chat Sample

Laravel Echoを使ったチャットのサンプル

## Setup

```
$ php artisan migrate
$ php artisan db:seed --class=UserSeeder
```

#### .env
```
...
BROADCAST_DRIVER=pusher
...
PUSHER_APP_ID=your-pusher-app-id
PUSHER_APP_KEY=your-pusher-app-key
PUSHER_APP_SECRET=your-pusher-app-secret
```

## Usage

2つのユーザーでログイン (`your-domain`/login)

1. First User
 - Email: first@example.com
 - Password: secret
2. Second User
 - Email: second@example.com
 - Password: secret
 
チャット画面 (`your-domain`/chat)
 
## Testing
```
$ php artisan dusk
```
