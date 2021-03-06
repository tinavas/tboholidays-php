<?php

class HotelSearchWithRoomsResponse
{

    /**
     * @var ResponseStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $ResponseTime
     */
    protected $ResponseTime = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @var string $SessionId
     */
    protected $SessionId = null;

    /**
     * @var string $NoOfRoomsRequested
     */
    protected $NoOfRoomsRequested = null;

    /**
     * @var string $CityId
     */
    protected $CityId = null;

    /**
     * @var string $CheckInDate
     */
    protected $CheckInDate = null;

    /**
     * @var string $CheckOutDate
     */
    protected $CheckOutDate = null;

    /**
     * @var ArrayOfRoomGuest $RoomGuests
     */
    protected $RoomGuests = null;

    /**
     * @var ArrayOfHotel_ResultWithRooms $HotelResultList
     */
    protected $HotelResultList = null;

    /**
     * @param ResponseStatus $Status
     * @param string $ResponseTime
     * @param string $Language
     * @param string $SessionId
     * @param string $NoOfRoomsRequested
     * @param string $CityId
     * @param string $CheckInDate
     * @param string $CheckOutDate
     * @param ArrayOfRoomGuest $RoomGuests
     * @param ArrayOfHotel_ResultWithRooms $HotelResultList
     */
    public function __construct($Status, $ResponseTime, $Language, $SessionId, $NoOfRoomsRequested, $CityId, $CheckInDate, $CheckOutDate, $RoomGuests, $HotelResultList)
    {
      $this->Status = $Status;
      $this->ResponseTime = $ResponseTime;
      $this->Language = $Language;
      $this->SessionId = $SessionId;
      $this->NoOfRoomsRequested = $NoOfRoomsRequested;
      $this->CityId = $CityId;
      $this->CheckInDate = $CheckInDate;
      $this->CheckOutDate = $CheckOutDate;
      $this->RoomGuests = $RoomGuests;
      $this->HotelResultList = $HotelResultList;
    }

    /**
     * @return ResponseStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ResponseStatus $Status
     * @return HotelSearchWithRoomsResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponseTime()
    {
      return $this->ResponseTime;
    }

    /**
     * @param string $ResponseTime
     * @return HotelSearchWithRoomsResponse
     */
    public function setResponseTime($ResponseTime)
    {
      $this->ResponseTime = $ResponseTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return HotelSearchWithRoomsResponse
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->SessionId;
    }

    /**
     * @param string $SessionId
     * @return HotelSearchWithRoomsResponse
     */
    public function setSessionId($SessionId)
    {
      $this->SessionId = $SessionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoOfRoomsRequested()
    {
      return $this->NoOfRoomsRequested;
    }

    /**
     * @param string $NoOfRoomsRequested
     * @return HotelSearchWithRoomsResponse
     */
    public function setNoOfRoomsRequested($NoOfRoomsRequested)
    {
      $this->NoOfRoomsRequested = $NoOfRoomsRequested;
      return $this;
    }

    /**
     * @return string
     */
    public function getCityId()
    {
      return $this->CityId;
    }

    /**
     * @param string $CityId
     * @return HotelSearchWithRoomsResponse
     */
    public function setCityId($CityId)
    {
      $this->CityId = $CityId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCheckInDate()
    {
      return $this->CheckInDate;
    }

    /**
     * @param string $CheckInDate
     * @return HotelSearchWithRoomsResponse
     */
    public function setCheckInDate($CheckInDate)
    {
      $this->CheckInDate = $CheckInDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getCheckOutDate()
    {
      return $this->CheckOutDate;
    }

    /**
     * @param string $CheckOutDate
     * @return HotelSearchWithRoomsResponse
     */
    public function setCheckOutDate($CheckOutDate)
    {
      $this->CheckOutDate = $CheckOutDate;
      return $this;
    }

    /**
     * @return ArrayOfRoomGuest
     */
    public function getRoomGuests()
    {
      return $this->RoomGuests;
    }

    /**
     * @param ArrayOfRoomGuest $RoomGuests
     * @return HotelSearchWithRoomsResponse
     */
    public function setRoomGuests($RoomGuests)
    {
      $this->RoomGuests = $RoomGuests;
      return $this;
    }

    /**
     * @return ArrayOfHotel_ResultWithRooms
     */
    public function getHotelResultList()
    {
      return $this->HotelResultList;
    }

    /**
     * @param ArrayOfHotel_ResultWithRooms $HotelResultList
     * @return HotelSearchWithRoomsResponse
     */
    public function setHotelResultList($HotelResultList)
    {
      $this->HotelResultList = $HotelResultList;
      return $this;
    }

}
