SELECT * FROM Track t
LEFT JOIN  MediaType mt ON t.MediaTypeId = mt.MediaTypeId
LEFT JOIN InvoiceLine il ON t.TrackId = il.TrackId
LEFT JOIN Invoice i ON il.InvoiceId = i.InvoiceId
WHERE mt.Name = 'video' AND Invoice.Total >= 200
GROUP BY t.Name
HAVING COUNT(DISTINCT i.InvoiceId) >= 1;
