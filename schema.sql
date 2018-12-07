-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 07:44 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hireme`
--
CREATE DATABASE IF NOT EXISTS `hireme` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hireme`;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `job_description` longtext,
  `category` varchar(100) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `company_location` longtext,
  `date_posted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_title`, `job_description`, `category`, `company_name`, `company_location`, `date_posted`) VALUES
(3, 'Software Engineer, Internship', 'A World-Changing Company  At Palantir, weâ€™re passionate about building software that solves problems. We partner with the most important institutions in the world to transform how they use data and technology. Our software has been used to stop terrorist attacks, discover new medicines, gain an edge in global financial markets, and more. If these types of projects excite you, we&#39;d love for you to join us. The Role  Software Engineers at Palantir build software at scale to transform how organizations around the world use data. As a Software Engineer, you&#39;ll contribute high-quality code to Palantir Gotham or Palantir Foundry: products that are deployed to the most important institutions in the public and private sector. You&#39;ll build features used by research scientists, aerospace engineers, intelligence analysts, and economic forecasters, in countries around the world. Palantir&#39;s Product Development organization is made up of small teams of Software Engineers. Each team focuses on a specific aspect of a product: for example, you might be part of a team that builds a Foundry front-end application, or a component of the Gotham release infrastructure. We encourage movement among teams to share context, skills, and experience, so you&#39;ll learn about many different aspects of each product. Software Engineers are involved throughout the product lifecycle, from idea generation, design, and prototyping to execution, and shipping. As a Software Engineer, you&#39;ll collaborate closely with technical and non-technical counterparts to understand our customers&#39; problems and build products that solve them. We think the best way to understand what our users need is to meet them, so occasionally, you&#39;ll tour the assembly line at an auto manufacturer or join a counter-terror analyst at their desk to really understand their mission and their pain points. It doesnâ€™t matter what languages you know when you join us, but it does matter that you can write clean, effective code and learn new languages quickly. Our software is constantly evolving, so we need engineers who can do the same. Alongside peers who bring diverse experience â€” startup founders, industry veterans, university TAs, and more â€” you&#39;ll build your skillset to apply the best technology to solve a given problem. Right now, we use:  A variety of languages, including Java and Go for back end and Typescript for front end Open-source technologies like Cassandra, Spark, ElasticSearch, React, and Redux Industry-standard build tooling, including Gradle, Webpack, and Github  Whether you aspire to be an entrepreneur or an engineering leader, we believe Palantir is the best place â€” with the best colleagues â€” to learn how. Youâ€™ll learn how to unpack a problem and understand the costs and consequences of its solution. Youâ€™ll learn new technologies and languages, and even develop them yourself. Youâ€™ll work autonomously and make decisions independently, within a community that will support and challenge you as you grow and develop. What We Value Must be planning on graduating in 2020 Strong engineering background in fields such as Computer Science, Mathematics, Software Engineering, and Physics Advanced-level Computer Science coursework, including in algorithms and data structures; experience with Java and/or web technologies a plus Familiarity with data structures, storage systems, cloud infrastructure, front-end frameworks, and other technical tools Strong coder with demonstrated proficiency in programming languages, such as Java, C++, Python, JavaScript, or similar languages Ability to collaborate and empathize with a variety of individuals. You can iterate with users and non-technical stakeholders and understand how your technical decisions impact them Demonstrated ability to learn and work independently and make decisions with minimal supervision A desire to work on software that can change the world and a passion for creating intuitive, scalable products that augment our users&#39; ability to work with data Palantir is proud to be an Equal Employment Opportunity and Affirmative Action employer. We do not discriminate based upon race, religion, color, national origin, gender (including pregnancy, childbirth, or related medical conditions), sexual orientation, gender identity, gender expression, age, status as a protected veteran, status as an individual with a disability, or other applicable legally protected characteristics. Palantir is committed to working with and providing reasonable accommodations to applicants with physical and mental disabilities. Please see the United States Department of Labor&#39;s EEO poster and EEO poster supplement for additional information.', 'DevOps & Sysadmin', 'Palantir Technologies', 'Palo Alto, CA', '2018-12-02 12:52:39'),
(4, 'Computer Science Intern', 'What&#39;s In it for You  Our purpose is to lead the way to tomorrow&#39;s energy network. Your work as an intern can impact millions of people who depend on electricity for their everyday lives.  You will get &#34;real world&#34; experience to begin or further your career pursuits in the energy industry. This is a paid intern position for 10 -12 weeks during summer 2019. You get to work on interesting and challenging assignments that will help grow your skill set. You will work in an extremely collaborative environment inside our LEED certified Folsom, California campus. Opportunities to interact with the CEO and the Executive team of the ISO Invitations to seminars on the latest energy industry topics such as renewables, electric cars and micro grids. Potential field trips. Social activities with other interns such as barbecues and movie nights. You get to work on our &#34;green&#34; LEED certified Folsom, California campus with some of the brightest people in the industry. What You Will Be Doing  Building new software tools in support of the reliable operation of the Grid and the energy markets we facilitate. You will learn more about smart grid technology, renewable resources, forecasting and the latest developments in energy industry. You will see ow the work you do this summer contributes directly to the success of the California Grid Data validation and user acceptance testing (UAT), schedule and monitor processes necessary for calculation and publication of energy market settlement statements and invoices. Development of enterprise-wide systems integration mapping, with database that links to interface specification. Interface with IT Architects, UML Modelers, and QA Leads to understand how to best depict these system-to-system interfaces to meet specific use cases. Provide technical content and sample code for the ISO&#39;s developer.caiso.com website. Document archiving solutions for new technologies as well as development of automation solutions. Oracle Database/Storage task queue maintenance, documentation, create automation scripts for Oracle database admin tasks/storage procurement and document, create automated reports of daily DBA/Storage procedures, create standard monitoring scripts, generate capacity reports. Projects to develop work products that will reduce processing time, enhance transparency or enhance capabilities in departments across the organization.  Qualifications  Level of Education and Discipline  Currently in a Bachelor&#39;s degree (BS) or Masters degree (MS) program in Computer Science, MIS or related field. Graduating December 2019 or later. Amount of Experience  No Experience required. Previous internship, projects, research or related work experience desired. Type of Experience  Previous internship, research, volunteer or work experience desired. Proficient in Microsoft office suite. Good presentation, oral and written communication skills highly desirable. Must be able to work effectively in a team environment. Excellent analytical and problems solving skills required.  Additional Information  All your information will be kept confidential according to EEO guidelines.', 'Programming', 'California ISO', ' Folsom, CA', '2018-12-02 12:55:11');

--
-- Triggers `jobs`
--
DELIMITER $$
CREATE TRIGGER `datetime_on_date_posted` BEFORE INSERT ON `jobs` FOR EACH ROW set new.date_posted = (NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `jobs_applied_for`
--

CREATE TABLE `jobs_applied_for` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date_applied` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs_applied_for`
--

INSERT INTO `jobs_applied_for` (`id`, `job_id`, `user_id`, `date_applied`) VALUES
(1, 4, 1, '2018-12-03 12:43:56'),
(5, 3, 1, '2018-12-03 13:05:18');

--
-- Triggers `jobs_applied_for`
--
DELIMITER $$
CREATE TRIGGER `datetime_on_date_applied` BEFORE INSERT ON `jobs_applied_for` FOR EACH ROW set new.date_applied = (NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) DEFAULT 'eg. Rupert',
  `lastname` varchar(20) DEFAULT 'eg. Jackson',
  `password` varchar(254) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `date_joined` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `password`, `telephone`, `email`, `date_joined`) VALUES
(1, 'admin', 'istrator', '$2y$10$gtOCQWtk6FEBkk.Eu60aEOO5xVjz6EA/AEaencnH3yuy7aHhwlL5u', '876-378-8765', 'admin@hireme.com', '2018-12-01 22:21:29'),
(4, 'Fantasia', 'Locke', '$2y$10$VBSTiJcWXBL.eiTIQyDHvuumtY/5qkVzAdbQeA3gHx2M85umqZL56', '876-999-8989', 'fanlocke@gmail.com', '2018-12-02 02:17:37');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `datetime_on_date_joined` BEFORE INSERT ON `users` FOR EACH ROW set new.date_joined = (NOW())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_applied_for`
--
ALTER TABLE `jobs_applied_for`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs_applied_for`
--
ALTER TABLE `jobs_applied_for`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
