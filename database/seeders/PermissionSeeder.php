<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminRole = Role::create(['description'=>'Super Admin Can Access Everything','name'=> 'Super Admin']);

        $permissionGroup = [
            'dashboard' => [
                'dashboard',
                'dashboard.appointment'
            ],
            'patient' => [
                'patient.list',
                'patient.print',
                'patient.create',
                'patient.edit',
                'patient.view',
                'patient.delete',
                'patient.clinical_notes',
                'patients.documents',
                'patient.sendmail',

            ],
            'prescription' => [
                'prescription.list',
                'prescription.create',
                'prescription.edit',
                'prescription.view',
                'prescription.delete',
                'prescription.print'

            ],
            'department' => [
                'department.list',
                'department.create',
                'department.edit',
                'department.view',
                'department.delete',
                'department.print'

            ],
            'user' => [
                'user.list',
                'user.create',
                'user.edit',
                'user.view',
                'user.delete',
                'user.print'

            ],
            'doctor' => [
                'doctor.list',
                'doctor.create',
                'doctor.edit',
                'doctor.view',
                'doctor.delete',
                'doctor.print'

            ],
            'noticeboard' => [
                'noticeboard.list',
                'noticeboard.create',
                'noticeboard.edit',
                'noticeboard.view',
                'noticeboard.delete',
                'noticeboard.print'

            ],
            'invoice' => [
                'invoice.list',
                'invoice.create',
                'invoice.edit',
                'invoice.view',
                'invoice.delete',
                'invoice.print',
                'invoice.sentmail',
                'addpayment'

            ],
            'appointment' => [
                'appointment.list',
                'appointment.print',
                'appointment.create',
                'appointment.edit',
                'appointment.view',
                'appointment.delete',
                'appointment.clinical_notes',
                'appointment.sendmail',
                'appointment.documents',
                'appointment.documents_upload',
                'appointment.documents_delete'

            ]
        ];

        foreach ( $permissionGroup as $permissionGroupKey => $permissions){
            foreach ($permissions as $permissionName){
                $permission = Permission::create([
                    'name'=>$permissionName
                ]);

                $superAdminRole->givePermissionTo($permission);
                $permission->assignRole($superAdminRole);
            }
        }
    }
}
