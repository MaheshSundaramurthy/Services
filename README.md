# Services

The Services microservice provides a robust Services engine to manage multiple Service related business functions:

1. Service Directory
1. Service Categorization
1. Multiple Service Scenario Types
1. Service Submissions
1. Service Form Schemas
1. Service Form Validations

The Services microservice connects with the Camunda and Formio microservices for BPM Scenario submissions.


## Screenshots

The following are screenshots of various aspects of the Services Microservice being rendered using the the Portal and Admin SPAs


![Portal service directory](./docs/resources/service-directory-portal.png)

---

![Portal Service - Quick permit Application](./docs/resources/service-directory-service-scenario-portal.png)

---

![Admin Service BPM Scenario Edit](./docs/resources/service-directory-bpm-scenario-admin.png)

---

![Admin Service view](./docs/resources/service-directory-service-view-admin.png)

---

![Admin Scenario list view](./docs/resources/service-directory-service-scenario-list-admin.png)

---

![Admin scenario creation selection](./docs/resources/service-directory-scenario-selection-admin.png)

---

![postman services](./docs/resources/postman-services-api.png)



## Table of Contents

- [Synopsis](#synopsis)
- [Installation](#installation)
- [Documentation](#documentation)
- [Contributing](#contributing)
- [History](#history)
- [Credits](#credits)

## Synopsis

Synopsis...

## Installation

Run docker.

```
docker-compose up -d
```

Run database migrations.

```
docker-compose exec php php bin/console doctrine:migrations:migrate
```

Run dev data fixtures (optional).

```
docker-compose exec php php bin/console doctrine:fixtures:load
```

## Documentation

...

### Scenario Type: BPM

The `BPM` scenario type is a complex scenario type that generates data flows across multiple micro services.

See: [BPM Scenario Data Flow](./docs/bpm-scenario-data-flow.md) documentation for further information about how data is exchanged between Services, Formio, Camunda, and the Client.


## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## History

History..

## Credits

Credits...