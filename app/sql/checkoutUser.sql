UPDATE Customers
SET firstName = :first_name, 
    surName = :last_name, 
    address = :address,  
    address_optional = :address_optional,  
    town_city = :town_city,  
    country = :country,  
    postcode = :postcode,  
    mobile_number = :mobile_number,  
    home_number = :home_number
WHERE userID = :userID;
