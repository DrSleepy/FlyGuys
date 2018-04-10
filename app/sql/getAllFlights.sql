SELECT

  flightID,

  departureID,

  landingID,

  price,

  flightDate,

  flightClass,

  departureTime as 'outboundDepartureTime',

  landingTime as 'outboundLandingTime',

  outboundDepartureLocation,

  outboundLandingLocation,

  returnDate,

  returnTakeoffTime,

  returnLandingTime,

  returnDepartureLocation,

  returnLandingLocation,

  returnID

FROM Flights F1

  JOIN (SELECT

    airportID,

    location as 'outboundDepartureLocation'

  FROM Airports) 

    A1 ON F1.departureID = A1.airportID

  JOIN (SELECT

    airportID,

    location as 'outboundLandingLocation'

  FROM Airports) 

    A2 ON F1.landingID = A2.airportID

  LEFT JOIN (SELECT

    flightID as 'returnFlightID',

    flightDate as 'returnDate',

    departureID as 'returnDepartureID',

    landingID as 'returnLandingID',

    departureTime as 'returnTakeoffTime',

    landingTime as 'returnLandingTime',

    returnDepartureLocation,

    returnLandingLocation

  FROM Flights F2

    JOIN (SELECT

      airportID,

      location as 'returnDepartureLocation'

    FROM Airports)

      A3 ON F2.departureID = A3.airportID

    JOIN (SELECT

      airportID,

      location as 'returnLandingLocation'

    FROM Airports)

      A4 ON F2.landingID = A4.airportID)

    F2 ON F1.returnID = F2.returnFlightID

WHERE returnID IS NOT NULL;
