# SQL queries 

Please answer the questions in this section using the schema below, by providing appropriate SQL query


```schema
# https://dbdiagram.io/d
Table InvoiceLine {
  InvoiceLineId integer [primary key]
  InvoiceId integer
  TrackId integer
  UnitPrice float
  Quantity integer
}

Table Invoice {
  InvoiceId integer [primary key]
  CustomerId integer
  Total float
}

Table Customer {
  CustomerId integer [primary key]
  FirstName varchar
  LastName varchar
  role varchar
  created_at timestamp
}

Table Track {
  TrackId integer [primary key]
  Name varchar
  MediaTypeId integer
  status varchar
  created_at timestamp
}

Table MediaType {
  MediaTypeId integer [primary key]
  Name varchar
}

Ref: Track.MediaTypeId > MediaType.MediaTypeId // many-to-one
Ref: InvoiceLine.InvoiceId > Invoice.InvoiceId // many-to-one
Ref: InvoiceLine.TrackId > Track.TrackId // many-to-one
Ref: Invoice.CustomerId > Customer.CustomerId // many-to-one
```

## Find all tracks of type video (MediaType.name equal to "video") that were sold in the store, where for each track there is at least one invoice including this track has a total that was at least $200

[Solution 01](./solution-01.sql)


## For each customer display first name, last name and the average total amount they have spent overall in the store for all of their purchases

[Solution 02](./solution-02.sql)
