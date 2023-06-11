SELECT c.FirstName,  c.LastName, AVG(i.Total) FROM  Customer c
LEFT JOIN Invoice i ON c.CustomerId = i.CustomerId
GROUP BY c.CustomerId, c.FirstName,  c.LastName
