<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ["id" => 1, "name" => "Alice Johnson", "email" => "alice@titanpartners.com", "role" => "Software Engineer", "avatar" => "https://i.pravatar.cc/150?u=1"],
            ["id" => 2, "name" => "Michael Smith", "email" => "michael@titanpartners.com", "role" => "Product Manager", "avatar" => "https://i.pravatar.cc/150?u=2"],
            ["id" => 3, "name" => "Sarah Connor", "email" => "sarah@titanpartners.com", "role" => "Flutter Developer", "avatar" => "https://i.pravatar.cc/150?u=3"],
            ["id" => 4, "name" => "James Bond", "email" => "007@titanpartners.com", "role" => "Security Analyst", "avatar" => "https://i.pravatar.cc/150?u=4"],
            ["id" => 5, "name" => "Emily Chen", "email" => "emily.chen@titanpartners.com", "role" => "UI/UX Designer", "avatar" => "https://i.pravatar.cc/150?u=5"],
            ["id" => 6, "name" => "David Miller", "email" => "david.m@titanpartners.com", "role" => "DevOps Engineer", "avatar" => "https://i.pravatar.cc/150?u=6"],
            ["id" => 7, "name" => "Olivia Wilson", "email" => "olivia.w@titanpartners.com", "role" => "Marketing Lead", "avatar" => "https://i.pravatar.cc/150?u=7"],
            ["id" => 8, "name" => "Robert Brown", "email" => "robert.b@titanpartners.com", "role" => "Backend Developer", "avatar" => "https://i.pravatar.cc/150?u=8"],
            ["id" => 9, "name" => "Sophia Davis", "email" => "sophia.d@titanpartners.com", "role" => "Data Scientist", "avatar" => "https://i.pravatar.cc/150?u=9"],
            ["id" => 10, "name" => "William Martinez", "email" => "william.m@titanpartners.com", "role" => "QA Engineer", "avatar" => "https://i.pravatar.cc/150?u=10"],
            ["id" => 11, "name" => "Isabella Garcia", "email" => "isabella.g@titanpartners.com", "role" => "Scrum Master", "avatar" => "https://i.pravatar.cc/150?u=11"],
            ["id" => 12, "name" => "James Rodriguez", "email" => "james.r@titanpartners.com", "role" => "Mobile Developer", "avatar" => "https://i.pravatar.cc/150?u=12"],
            ["id" => 13, "name" => "Mia Hernandez", "email" => "mia.h@titanpartners.com", "role" => "HR Manager", "avatar" => "https://i.pravatar.cc/150?u=13"],
            ["id" => 14, "name" => "Benjamin Lopez", "email" => "benjamin.l@titanpartners.com", "role" => "System Architect", "avatar" => "https://i.pravatar.cc/150?u=14"],
            ["id" => 15, "name" => "Charlotte Gonzalez", "email" => "charlotte.g@titanpartners.com", "role" => "Content Strategist", "avatar" => "https://i.pravatar.cc/150?u=15"],
            ["id" => 16, "name" => "Lucas Wilson", "email" => "lucas.w@titanpartners.com", "role" => "Frontend Developer", "avatar" => "https://i.pravatar.cc/150?u=16"],
            ["id" => 17, "name" => "Amelia Anderson", "email" => "amelia.a@titanpartners.com", "role" => "Business Analyst", "avatar" => "https://i.pravatar.cc/150?u=17"],
            ["id" => 18, "name" => "Henry Thomas", "email" => "henry.t@titanpartners.com", "role" => "Network Engineer", "avatar" => "https://i.pravatar.cc/150?u=18"],
            ["id" => 19, "name" => "Evelyn Taylor", "email" => "evelyn.t@titanpartners.com", "role" => "Operations Manager", "avatar" => "https://i.pravatar.cc/150?u=19"],
            ["id" => 20, "name" => "Alexander Moore", "email" => "alexander.m@titanpartners.com", "role" => "Full Stack Dev", "avatar" => "https://i.pravatar.cc/150?u=20"],
            ["id" => 21, "name" => "Ava Jackson", "email" => "ava.j@titanpartners.com", "role" => "Graphic Designer", "avatar" => "https://i.pravatar.cc/150?u=21"],
            ["id" => 22, "name" => "Daniel Martin", "email" => "daniel.m@titanpartners.com", "role" => "Database Admin", "avatar" => "https://i.pravatar.cc/150?u=22"],
            ["id" => 23, "name" => "Ella Lee", "email" => "ella.l@titanpartners.com", "role" => "Sales Director", "avatar" => "https://i.pravatar.cc/150?u=23"],
            ["id" => 24, "name" => "Matthew Perez", "email" => "matthew.p@titanpartners.com", "role" => "Cloud Architect", "avatar" => "https://i.pravatar.cc/150?u=24"],
            ["id" => 25, "name" => "Scarlett Thompson", "email" => "scarlett.t@titanpartners.com", "role" => "Legal Counsel", "avatar" => "https://i.pravatar.cc/150?u=25"],
            ["id" => 26, "name" => "Jack White", "email" => "jack.w@titanpartners.com", "role" => "IT Support", "avatar" => "https://i.pravatar.cc/150?u=26"],
            ["id" => 27, "name" => "Victoria Harris", "email" => "victoria.h@titanpartners.com", "role" => "Flutter Developer", "avatar" => "https://i.pravatar.cc/150?u=27"],
            ["id" => 28, "name" => "Samuel Clark", "email" => "samuel.c@titanpartners.com", "role" => "Security Engineer", "avatar" => "https://i.pravatar.cc/150?u=28"],
            ["id" => 29, "name" => "Grace Lewis", "email" => "grace.l@titanpartners.com", "role" => "Product Owner", "avatar" => "https://i.pravatar.cc/150?u=29"],
            ["id" => 30, "name" => "Joseph Robinson", "email" => "joseph.r@titanpartners.com", "role" => "AI Specialist", "avatar" => "https://i.pravatar.cc/150?u=30"],
            ["id" => 31, "name" => "Chloe Walker", "email" => "chloe.w@titanpartners.com", "role" => "Office Manager", "avatar" => "https://i.pravatar.cc/150?u=31"],
            ["id" => 32, "name" => "David Hall", "email" => "david.h@titanpartners.com", "role" => "Recruiter", "avatar" => "https://i.pravatar.cc/150?u=32"],
            ["id" => 33, "name" => "Zoey Allen", "email" => "zoey.a@titanpartners.com", "role" => "Social Media Lead", "avatar" => "https://i.pravatar.cc/150?u=33"],
            ["id" => 34, "name" => "Gabriel Young", "email" => "gabriel.y@titanpartners.com", "role" => "Finance Manager", "avatar" => "https://i.pravatar.cc/150?u=34"],
            ["id" => 35, "name" => "Penelope King", "email" => "penelope.k@titanpartners.com", "role" => "Account Executive", "avatar" => "https://i.pravatar.cc/150?u=35"],
            ["id" => 36, "name" => "Carter Wright", "email" => "carter.w@titanpartners.com", "role" => "Logistics Coord", "avatar" => "https://i.pravatar.cc/150?u=36"],
            ["id" => 37, "name" => "Layla Scott", "email" => "layla.s@titanpartners.com", "role" => "Copywriter", "avatar" => "https://i.pravatar.cc/150?u=37"],
            ["id" => 38, "name" => "Wyatt Green", "email" => "wyatt.g@titanpartners.com", "role" => "SEO Specialist", "avatar" => "https://i.pravatar.cc/150?u=38"],
            ["id" => 39, "name" => "Nora Baker", "email" => "nora.b@titanpartners.com", "role" => "Data Analyst", "avatar" => "https://i.pravatar.cc/150?u=39"],
            ["id" => 40, "name" => "Julian Adams", "email" => "julian.a@titanpartners.com", "role" => "Backend Developer", "avatar" => "https://i.pravatar.cc/150?u=40"],
            ["id" => 41, "name" => "Lily Nelson", "email" => "lily.n@titanpartners.com", "role" => "Flutter Developer", "avatar" => "https://i.pravatar.cc/150?u=41"],
            ["id" => 42, "name" => "Ryan Carter", "email" => "ryan.c@titanpartners.com", "role" => "DevOps Engineer", "avatar" => "https://i.pravatar.cc/150?u=42"],
            ["id" => 43, "name" => "Hazel Mitchell", "email" => "hazel.m@titanpartners.com", "role" => "UX Researcher", "avatar" => "https://i.pravatar.cc/150?u=43"],
            ["id" => 44, "name" => "Nathan Perez", "email" => "nathan.p@titanpartners.com", "role" => "Technical Lead", "avatar" => "https://i.pravatar.cc/150?u=44"],
            ["id" => 45, "name" => "Violet Roberts", "email" => "violet.r@titanpartners.com", "role" => "QA Tester", "avatar" => "https://i.pravatar.cc/150?u=45"],
            ["id" => 46, "name" => "Isaac Turner", "email" => "isaac.t@titanpartners.com", "role" => "System Admin", "avatar" => "https://i.pravatar.cc/150?u=46"],
            ["id" => 47, "name" => "Aurora Phillips", "email" => "aurora.p@titanpartners.com", "role" => "Client Liaison", "avatar" => "https://i.pravatar.cc/150?u=47"],
            ["id" => 48, "name" => "Caleb Campbell", "email" => "caleb.c@titanpartners.com", "role" => "Security Analyst", "avatar" => "https://i.pravatar.cc/150?u=48"],
            ["id" => 49, "name" => "Stella Parker", "email" => "stella.p@titanpartners.com", "role" => "Creative Director", "avatar" => "https://i.pravatar.cc/150?u=49"],
            ["id" => 50, "name" => "Thomas Evans", "email" => "thomas.e@titanpartners.com", "role" => "CTO", "avatar" => "https://i.pravatar.cc/150?u=50"],
        ];
        return response()->json([
            'status' => 'success',
            'data' => $users
        ], 200);
    }
}