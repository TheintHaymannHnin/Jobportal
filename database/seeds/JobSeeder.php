<?php

use App\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create([
            'name' => 'C# Web Developer',
            'position' => 'Junior',
            'salary' => 300000,
            'requirement' => 'Must be BE-IT,Minimum 3 years of experience in PHP , Must speak English fluently',
            'description' => 'This job is very good for everyone',
            'category_id' => 1,
            'company_id' => 5,
            'type_id' => 1,
        ]);
        Job::create([
            'name' => 'PHP Web Developer',
            'position' => 'Junior',
            'salary' => 400000,
            'requirement' => 'Must be BE-IT, Must speak English fluently',
            'description' => 'This job is very good for everyone',
            'category_id' => 1,
            'company_id' => 5,
            'type_id' => 4,
        ]);
        Job::create([
            'name' => 'Project Manager (Civil) (Construction)',
            'position' => 'Junior',
            'salary' => 500000,
            'requirement' => 'New Graduates can apply ,Graduates in Civil Engineer',
            'description' => ' Prepares feasibility study by analyzing engineering design; conducting environmental impact studies; assembling data.',
            'category_id' => 11,
            'company_id' => 18,
            'type_id' => 2,
        ]);
        Job::create([
            'name' => 'Medical Marketing Officer',
            'position' => 'senior',
            'salary' => 600000,
            'requirement' => 'Good selling and communication skill, Good product and market knowledge ,Strong focused on customer relationship,Good team player',
            'description' => 'Responsible for visiting Doctors as per assigned plan,Responsible for achievement of assigned area sales target',
            'category_id' => 4,
            'company_id' => 11,
            'type_id' => 2,
        ]);
        Job::create([
            'name' => 'Marketing Assistant',
            'position' => 'senior',
            'salary' =>300000,
            'requirement' => 'Any Graduate prefer with certificate in marketing',
            'description' => 'Prepare report for monthly activites ',
            'category_id' => 2,
            'company_id' => 11,
            'type_id' => 2,
        ]);
        Job::create([
            'name' => 'Hotel Assistant Manager',
            'position' => 'senior',
            'salary' =>600000,
            'requirement' => 'Any Graduate and Diploma,Good English Skill',
            'description' => 'Communicate with clients and evaluate their needs',
            'category_id' => 5 ,
            'company_id' =>12,
            'type_id' => 2,
        ]);
        Job::create([
            'name' => 'Performance Analyst Engineer',
            'position' => 'senior',
            'salary' =>1000000 ,
            'requirement' => 'University Graduate preferable with BE(EC), BE(IT) & Computer Science',
            'description' => 'To be in charge of the performance monitoring of all network KPIs and KQI for all domains (Radio, Transmission, IP Transport and Core CS/PS) and providing accurate and timely Network performance reports to different department related to  business and technology.',
            'category_id' => 7,
            'company_id' =>10,
            'type_id' => 2,
        ]);
        Job::create([
            'name' => 'HR Manager (Recruitment & L&D)',
            'position' => 'senior',
            'salary' => 800000,
            'requirement' => 'Any Graduate, more preferable to Diploma in HR or MBA',
            'description' => 'Work with the different Business Unit’s HR Manager to confirm hiring needs and requirements which need to meet organizational goals.',
            'category_id' => 8,
            'company_id' => 17,
            'type_id' => 2,
        ]);
        Job::create([
            'name' => 'Video Journalists',
            'position' => 'junior',
            'salary' =>350000 ,
            'requirement' => 'Through understanding of the current broadcast and digital media landscape.',
            'description' => 'Capturing, encoding, and editing video for the web,Our Video journalist role will be to create digital video content',
            'category_id' =>9,
            'company_id' => 16,
            'type_id' => 2,
        ]);
        Job::create([
            'name' => 'Laravel Developer',
            'position' => 'Senior',
            'salary' => 1000000,
            'requirement' => 'Must be BE-IT, Must speak English fluently',
            'description' => 'This job is very good for everyone',
            'category_id' => 1,
            'company_id' => 5,
            'type_id' => 2,
        ]);
        Job::create([
            'name' => 'Senior Accountant',
            'position' => 'senior',
            'salary' => 800000,
            'requirement' => 'LCCI level 3 (or) ACCA Part 1 certified Accountant, Any degree holder, preferably B.Com,Minimum 2 years working experience in the accounting field ',
            'description' => 'Reporting closing stock weekly and checking ground stock monthly, Update financial data in databases to ensure that information will be accurate timely,Analyzing and reporting trends of sales, stock and key accounts',
            'category_id' =>22 ,
            'company_id' =>14,
            'type_id' =>2,
        ]);
        
        Job::create([
            'name' => 'Java Web Developer',
            'position' => 'Junior',
            'salary' => 300000,
            'requirement' => 'Must be BE-IT,Minimum 3 years of experience in PHP , Must speak English fluently',
            'description' => 'This job is very good for everyone',
            'category_id' => 1,
            'company_id' => 5,
            'type_id' => 1,
        ]);
        Job::create([
            'name' => 'Graphic Designer',
            'position' => 'junior',
            'salary' =>500000 ,
            'requirement' => 'Bachelor’s degree,Experience as a graphic designer or in related field,Demonstrable graphic design skills with a strong portfolio',
            'description' => 'Planning concepts by studying relevant information and materials,Communicating with clients about layout and design',
            'category_id' =>10 ,
            'company_id' =>15,
            'type_id' =>4,
        ]);
        Job::create([
            'name' => 'Civil Site Engineer ',
            'position' => 'senior',
            'salary' =>800000 ,
            'requirement' => 'Must have over 3 years experience as Civil Engineer,Must have working experience in the Road Construction Site,Must be BE-Civil',
            'description' => '',
            'category_id' =>11 ,
            'company_id' =>7,
            'type_id' =>2,
        ]);
        Job::create([
            'name' => 'Architect Designer',
            'position' => 'internship',
            'salary' =>200000 ,
            'requirement' => 'Bachelor of Architecture(BE- Arch) and preferable from basic qualifications in Design,Prefer age between 25 and 30',
            'description' => 'Must be proficient in Adobe Photoshop & Graphic Design,Bring your own creativity to be a success in this role',
            'category_id' =>10 ,
            'company_id' =>15,
            'type_id' =>3,
        ]);
        Job::create([
            'name' => 'Electrical Engineer',
            'position' => 'senior',
            'salary' => 600000,
            'requirement' => 'B.E (Electrical) or other equivalent,Able to calculate electrical design HT and LT,Minimum 5 year experience in related field.',
            'description' => 'Recording and monitoring of site works, man-power and materials,Communicating with MEP, QC and Contractors to make sure right information is provided in the team',
            'category_id' =>12 ,
            'company_id' =>10,
            'type_id' => 2,
        ]);
        Job::create([
            'name' => 'Mechanical Engineer',
            'position' => 'senior',
            'salary' => 550000,
            'requirement' => ' Diploma or Degree in Mechanical Engineering,Able to Work-At-Heights and take the rides as part of troubleshooting,Able to work on shifts, including weekends and public holidays',
            'description' => 'Supervise installation and maintenance of Machinery, mechanical equipment on silos and warehouse, jetty and whole yard, Diagnosing mechanical issues and correcting them',
            'category_id' =>15 ,
            'company_id' =>18,
            'type_id' =>2,
        ]);
        Job::create([
            'name' => 'Nurse',
            'position' => 'senior',
            'salary' =>400000 ,
            'requirement' => 'Any Graduate, Certificate of Nursing and First Aid Certificate,Positive thinking, hardworking and patie,
            Excellent knowledge of health, safety and hygiene',
            'description' => 'Excellent knowledge of health, safety and hygiene,Excellent communication skills,Take detailed health care histories,Keep and Update students’ medical history.',
            'category_id' => 4,
            'company_id' =>28,
            'type_id' => 2,
        ]);
        Job::create([
            'name' => 'Medical Representative',
            'position' => 'senior',
            'salary' =>650000 ,
            'requirement' => 'Bachelor or University Degree Holder',
            'description' => 'To possess Product Knowledge, Industry Knowledge & Customer Knowledge,Detailing & promoting products to MDs and Medical Allied Professionals to build brands',
            'category_id' =>4 ,
            'company_id' =>28 ,
            'type_id' =>2 ,
        ]);
        Job::create([
            'name' => 'Senior Accountant',
            'position' => 'senior',
            'salary' => 800000,
            'requirement' => 'LCCI level 3 (or) ACCA Part 1 certified Accountant, Any degree holder, preferably B.Com,Minimum 2 years working experience in the accounting field ',
            'description' => 'Reporting closing stock weekly and checking ground stock monthly, Update financial data in databases to ensure that information will be accurate timely,Analyzing and reporting trends of sales, stock and key accounts',
            'category_id' =>22 ,
            'company_id' =>17,
            'type_id' =>2,
        ]);
        Job::create([
            'name' => 'Electrical Engineer',
            'position' => 'senior',
            'salary' => 700000,
            'requirement' => 'B.E (Electrical) or other equivalent,Able to calculate electrical design HT and LT,Minimum 5 year experience in related field.',
            'description' => 'Recording and monitoring of site works, man-power and materials,Communicating with MEP, QC and Contractors to make sure right information is provided in the team',
            'category_id' =>12 ,
            'company_id' =>8,
            'type_id' => 2,
        ]);
        Job::create([
            'name' => 'Mechtronic Engineer',
            'position' => 'senior',
            'salary' => 600000,
            'requirement' => ' Diploma or Degree in Mechtronic Engineering,Able to Work-At-Heights and take the rides as part of troubleshooting,Able to work on shifts, including weekends and public holidays',
            'description' => 'Supervise installation and maintenance of Machinery, mechanical equipment on silos and warehouse, jetty and whole yard, Diagnosing mechanical issues and correcting them',
            'category_id' =>14 ,
            'company_id' =>18,
            'type_id' =>2,
        ]);
        Job::create([
            'name' => 'Electronic Engineer',
            'position' => 'senior',
            'salary' => 700000,
            'requirement' => 'B.E (EC) or other equivalent,Able to calculate electrical design HT and LT,Minimum 5 year experience in related field.',
            'description' => 'Recording and monitoring of site works, man-power and materials,Communicating with MEP, QC and Contractors to make sure right information is provided in the team',
            'category_id' =>13 ,
            'company_id' =>8,
            'type_id' => 2,
        ]);
        Job::create([
            'name' => 'Nurse',
            'position' => 'senior',
            'salary' =>300000 ,
            'requirement' => 'Any Graduate, Certificate of Nursing and First Aid Certificate,Positive thinking, hardworking and patie,
            Excellent knowledge of health, safety and hygiene',
            'description' => 'Excellent knowledge of health, safety and hygiene,Excellent communication skills,Take detailed health care histories,Keep and Update students’ medical history.',
            'category_id' => 4,
            'company_id' =>14,
            'type_id' => 2,
        ]);
        Job::create([
            'name' => 'Marketing Manager',
            'position' => 'senior',
            'salary' =>500000,
            'requirement' => 'Any Graduate prefer with certificate in marketing',
            'description' => 'Prepare report for monthly activites ',
            'category_id' => 2,
            'company_id' => 11,
            'type_id' => 2,
        ]);
        Job::create([
            'name' => 'Head Of Finance And Accounting',
            'position' => 'senior',
            'salary' => 900000,
            'requirement' => 'CPA or Professional ACCA,University degree in Commerce/ Accounting Major,Prior experience running a Finance/ Accounting Department,ERP implementation experience',
            'description' => 'Financial reporting to HQ, including preparation and validation of monthly sales reports,Reviewing and analyzing monthly sales revenue, product costs, distributors’ reports, and calculate quarterly sales incentive bonuses,Cooperating with HR for monthly payroll and personal-income tax withholding',
            'category_id' =>22 ,
            'company_id' =>17,
            'type_id' =>2,
        ]);
        Job::create([
            'name' => 'Business Associate Manager',
            'position' => 'senior',
            'salary' => 800000,
            'requirement' => '2 years of Working knowledge of Contract and Commercial Management experience,Proficiency using Microsoft Office applications ,Ability to read, analyze and interpret legal documents',
            'description' => ' Participates in Contract Management, proposing solutions and Project Management teams to support contract compliance, Commercial negotiation with Government Departments, Agent, other Companies etc,Financial Data analyze and statistics.',
            'category_id' => 8,
            'company_id' =>17,
            'type_id' =>2,
        ]);
        Job::create([
            'name' => 'Python Web Developer',
            'position' => 'Junior',
            'salary' => 400000,
            'requirement' => 'Must be BE-IT, Must speak English fluently',
            'description' => 'This job is very good for everyone',
            'category_id' => 1,
            'company_id' => 5,
            'type_id' => 3,
        ]);
    }
}
