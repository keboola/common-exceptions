# common-exceptions

> This package provides common exception interfaces to be shared between different Keboola systems.

# Usage

> In your library or application implement `UserExceptionInterface` for exceptions that are caused by user's error. That usually means validation failures, HTTP404s, HTTP403s, etc. Anything where user can take any step to fix it. 
>
> Also there is `ApplicationExceptionInterface` for the other thing - where you want to explicitly state that the exception is NOT user error.  

## Development
 
Clone this repository and init the workspace with following command:

```
git clone https://github.com/keboola/common-exceptions
cd common-exceptions
docker-compose build
docker-compose run --rm dev composer install --no-scripts
```

Run the test suite using this command:

```
docker-compose run --rm dev composer tests
```
 
# Integration

For information about deployment and integration with KBC, please refer to the [deployment section of developers documentation](https://developers.keboola.com/extend/component/deployment/) 

## License

MIT licensed, see [LICENSE](./LICENSE) file.
