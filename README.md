## Instructions
- create db named streamgo or edit .env accordingly with creds
- php artisan migrate && php artisan db:seed

## Api call 
- api/messages (all messages)
- api/message (new message) [POST:author_id, message]
- api/message/{id} (delete message)