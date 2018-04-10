DELETE FROM Wishlists
WHERE userID = :userID AND flightID = :flightID LIMIT 1
