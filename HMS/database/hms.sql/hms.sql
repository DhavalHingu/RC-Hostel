--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `block_master`
--

CREATE TABLE `block_master` (
  `block_no` int(2) NOT NULL,
  `block_name` varchar(10) NOT NULL,
  `email_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `email_id` varchar(30) NOT NULL,
  `fees_type` varchar(5) NOT NULL,
  `date` date NOT NULL,
  `total_fees` int(10) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `regestration_form`
--

CREATE TABLE `regestration_form` (
  `name` varchar(25) NOT NULL,
  `gender` bit(1) NOT NULL,
  `date_of_birth` date NOT NULL,
  `contact_no` int(10) NOT NULL,
  `parent_no` int(10) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `department` varchar(10) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `merit_no` int(10) NOT NULL,
  `address` varchar(60) NOT NULL,
  `upload_photo` varchar(80) NOT NULL,
  `upload_receipt` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_master`
--

CREATE TABLE `room_master` (
  `room_id` int(10) NOT NULL,
  `block_no` int(2) NOT NULL,
  `room_no` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
