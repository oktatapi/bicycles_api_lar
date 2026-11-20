# Endpoints

* /api/bicycles

## Get bicycles

* Method: GET
* Path: /api/bicycles
* Description: Get all bicycles

## Get bicycle by ID

* Method: GET
* Path: /api/bicycles/{id}
* Description: Get a specific bicycle

## Create bicycle

* Method: POST
* Path: /api/bicycles
* Description: Create a new bicycle

```json
{
    "brand": "Trek",
    "type": "hegyi",
    "frame_size": "M",
    "price": 500,
}
```

## Update bicycle

* Method: PUT
* Path: /api/bicycles/{id}
* Description: Update a bicycle

```json
{
    "brand": "Trek",
    "type": "hegyi",
    "frame_size": "M",
    "price": 500,
}
```

## Delete bicycle

* Method: DELETE
* Path: /api/bicycles/{id}
* Description: Delete a bicycle
