<?php

if (!function_exists('libvirt_connect')) {
    /**
     * This function should be called first to get a connection to the Hypervisor. If necessary, authentication will be performed using supplied credentials.
     * @param string $url URL of the hypervisor to connect to. Can be for example  or .
     * @param bool $readonly If  (default) connection is made readonly.
     * @param array $credentials Credentials to authenticate with. See  for more details.
     * @return resource|bool
     */
    function libvirt_connect (string $url = null, bool $readonly = true, array $credentials = array()) {}
}

if (!function_exists('libvirt_connect_get_uri')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_connect_get_uri ($conn) {}
}

if (!function_exists('libvirt_connect_get_hostname')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_connect_get_hostname ($conn) {}
}

if (!function_exists('libvirt_connect_get_hypervisor')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_connect_get_hypervisor ($conn) {}
}

if (!function_exists('libvirt_connect_get_capabilities')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $xpath 
     * @return mixed
     */
    function libvirt_connect_get_capabilities ($conn, $xpath) {}
}

if (!function_exists('libvirt_connect_get_domain_capabilities')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $emulatorbin 
     * @param  $arch 
     * @param  $machine 
     * @param  $virttype 
     * @param  $flags 
     * @param  $xpath 
     * @return mixed
     */
    function libvirt_connect_get_domain_capabilities ($conn, $emulatorbin, $arch, $machine, $virttype, $flags, $xpath) {}
}

if (!function_exists('libvirt_connect_get_emulator')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $arch 
     * @return mixed
     */
    function libvirt_connect_get_emulator ($conn, $arch) {}
}

if (!function_exists('libvirt_connect_get_nic_models')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $arch 
     * @return mixed
     */
    function libvirt_connect_get_nic_models ($conn, $arch) {}
}

if (!function_exists('libvirt_connect_get_soundhw_models')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $arch 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_connect_get_soundhw_models ($conn, $arch, $flags) {}
}

if (!function_exists('libvirt_connect_get_maxvcpus')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $type 
     * @return mixed
     */
    function libvirt_connect_get_maxvcpus ($conn, $type) {}
}

if (!function_exists('libvirt_connect_get_sysinfo')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_connect_get_sysinfo ($conn) {}
}

if (!function_exists('libvirt_connect_get_encrypted')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_connect_get_encrypted ($conn) {}
}

if (!function_exists('libvirt_connect_get_secure')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_connect_get_secure ($conn) {}
}

if (!function_exists('libvirt_connect_get_information')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_connect_get_information ($conn) {}
}

if (!function_exists('libvirt_connect_get_machine_types')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_connect_get_machine_types ($conn) {}
}

if (!function_exists('libvirt_connect_get_all_domain_stats')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $stats 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_connect_get_all_domain_stats ($conn, $stats, $flags) {}
}

if (!function_exists('libvirt_stream_create')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_stream_create ($conn) {}
}

if (!function_exists('libvirt_stream_close')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_stream_close ($conn) {}
}

if (!function_exists('libvirt_stream_abort')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_stream_abort ($conn) {}
}

if (!function_exists('libvirt_stream_finish')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_stream_finish ($conn) {}
}

if (!function_exists('libvirt_stream_send')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $data 
     * @param  $len 
     * @return mixed
     */
    function libvirt_stream_send ($conn, $data, $len) {}
}

if (!function_exists('libvirt_stream_recv')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $data 
     * @param  $len 
     * @return mixed
     */
    function libvirt_stream_recv ($conn, $data, $len) {}
}

if (!function_exists('libvirt_domain_new')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $name 
     * @param  $arch 
     * @param  $memMB 
     * @param  $maxmemMB 
     * @param  $vcpus 
     * @param  $iso 
     * @param  $disks 
     * @param  $networks 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_new ($conn, $name, $arch, $memMB, $maxmemMB, $vcpus, $iso, $disks, $networks, $flags) {}
}

if (!function_exists('libvirt_domain_new_get_vnc')) {
    /**
     * A predefined method set by the library, and not documented...
     * @return mixed
     */
    function libvirt_domain_new_get_vnc () {}
}

if (!function_exists('libvirt_domain_get_counts')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_domain_get_counts ($conn) {}
}

if (!function_exists('libvirt_domain_is_persistent')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_domain_is_persistent ($conn) {}
}

if (!function_exists('libvirt_domain_lookup_by_name')) {
    /**
     * Try to look up a domain on the given hypervisor based on its name.
     * @param resource $connection Libvirt connection obtained by calling .
     * @param string $name Name of a domain.
     */
    function libvirt_domain_lookup_by_name ($connection, string $name) {}
}

if (!function_exists('libvirt_domain_get_xml_desc')) {
    /**
     * Provide an XML description of the domain. The description may be reused later to relaunch the domain with  or defined with .
     * @param resource $domain Domain resource of domain to get XML description.
     * @param integer $flags Logical OR of any of these flags:
     * @return string
     */
    function libvirt_domain_get_xml_desc ($domain, integer $flags): string {}
}

if (!function_exists('libvirt_domain_get_disk_devices')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_domain_get_disk_devices ($conn) {}
}

if (!function_exists('libvirt_domain_get_interface_devices')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_domain_get_interface_devices ($conn) {}
}

if (!function_exists('libvirt_domain_change_vcpus')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $numCpus 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_change_vcpus ($conn, $numCpus, $flags) {}
}

if (!function_exists('libvirt_domain_change_memory')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $allocMem 
     * @param  $allocMax 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_change_memory ($conn, $allocMem, $allocMax, $flags) {}
}

if (!function_exists('libvirt_domain_change_boot_devices')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $first 
     * @param  $second 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_change_boot_devices ($conn, $first, $second, $flags) {}
}

if (!function_exists('libvirt_domain_disk_add')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $img 
     * @param  $dev 
     * @param  $type 
     * @param  $driver 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_disk_add ($conn, $img, $dev, $type, $driver, $flags) {}
}

if (!function_exists('libvirt_domain_disk_remove')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $dev 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_disk_remove ($conn, $dev, $flags) {}
}

if (!function_exists('libvirt_domain_nic_add')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $mac 
     * @param  $network 
     * @param  $model 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_nic_add ($conn, $mac, $network, $model, $flags) {}
}

if (!function_exists('libvirt_domain_nic_remove')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $dev 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_nic_remove ($conn, $dev, $flags) {}
}

if (!function_exists('libvirt_domain_attach_device')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $xml 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_attach_device ($conn, $xml, $flags) {}
}

if (!function_exists('libvirt_domain_detach_device')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $xml 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_detach_device ($conn, $xml, $flags) {}
}

if (!function_exists('libvirt_domain_get_info')) {
    /**
     * Extract information about a domain. Note that if the connection used to get the domain is limited only a partial set of the information can be extracted.
     * @param resource $domain Domain resource of domain to get information for.
     * @return array
     */
    function libvirt_domain_get_info ($domain): array {}
}

if (!function_exists('libvirt_domain_get_name')) {
    /**
     * Get the public name for that domain
     * @param resource $domain Domain resource of domain to get name of.
     */
    function libvirt_domain_get_name ($domain) {}
}

if (!function_exists('libvirt_domain_get_uuid')) {
    /**
     * Get the UUID for a domain as a binary string. For textual representation use .
     * @param resource $domain Domain resource of domain to get UUID of.
     * @return string
     */
    function libvirt_domain_get_uuid ($domain): string {}
}

if (!function_exists('libvirt_domain_get_uuid_string')) {
    /**
     * Get the UUID for a domain as string (i.e. 25ab2490-7c4c-099f-b647-45ff8efa73f6 ). For more information about UUID see RFC4122. For binary representation use .
     * @param resource $domain Domain resource of domain to get UUID of.
     * @return string
     */
    function libvirt_domain_get_uuid_string ($domain): string {}
}

if (!function_exists('libvirt_domain_get_id')) {
    /**
     * Get the hypervisor ID number for the domain. Is valid only for running domains. For more unique ID use  or . These functions are valid for all domains not only for active ones.
     * @param resource $domain Domain resource of domain to look up. You can get domain resource using various functions (i.e.  or ). Valid only for running (active) domains.
     */
    function libvirt_domain_get_id ($domain) {}
}

if (!function_exists('libvirt_domain_lookup_by_uuid')) {
    /**
     * Try to look up a domain on the given hypervisor based on its UUID (in binary representation).  For lookup based on textual UUID use .
     * @param resource $connection Libvirt connection obtained by calling .
     * @param string $uuid UUID of a domain to look up (in binary representation).
     */
    function libvirt_domain_lookup_by_uuid ($connection, string $uuid) {}
}

if (!function_exists('libvirt_domain_lookup_by_uuid_string')) {
    /**
     * Try to look up a domain on the given hypervisor based on its UUID (in textual representation). For lookup based on binary UUID use .
     * @param resource $connection Libvirt connection obtained by calling .
     * @param string $uuid UUID of a domain to look up (in textual representation).
     */
    function libvirt_domain_lookup_by_uuid_string ($connection, string $uuid) {}
}

if (!function_exists('libvirt_domain_lookup_by_id')) {
    /**
     * Try to look up a domain based on the hypervisor ID number. Note that this won't work for inactive domains which have an ID of -1, in that case a lookup based on the Name or UUId need to be done instead.
     * @param resource $connection Libvirt connection obtained by calling .
     * @param integer $iD Hypervisor ID of a domain.
     */
    function libvirt_domain_lookup_by_id ($connection, integer $iD) {}
}

if (!function_exists('libvirt_domain_create')) {
    /**
     * Launch a defined domain. If the call succeed the domain moves from the defined to the running domains pools.
     * @param resource $domain Domain resource of domain to be launched. You can get domain resource using various functions (i.e.  or ).
     */
    function libvirt_domain_create ($domain) {}
}

if (!function_exists('libvirt_domain_destroy')) {
    /**
     * Destroy the domain object. The running instance is shutdown if not down already and all resources used by it are given back to the hypervisor. This function may require privileged access.
     * @param resource $domain Domain resource of domain to be destroyed. You can get domain resource using various functions (i.e.  or ).
     */
    function libvirt_domain_destroy ($domain) {}
}

if (!function_exists('libvirt_domain_resume')) {
    /**
     * Resume an suspended domain, the process is restarted from the state where it was frozen by calling . This function may requires privileged access
     * @param resource $domain Domain resource of domain to resume.You can get domain resource using various functions (i.e.  or ).
     */
    function libvirt_domain_resume ($domain) {}
}

if (!function_exists('libvirt_domain_core_dump')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $to 
     * @return mixed
     */
    function libvirt_domain_core_dump ($conn, $to) {}
}

if (!function_exists('libvirt_domain_shutdown')) {
    /**
     * Shutdown a domain, the domain object is still usable there after but the domain OS is being stopped. Note that the guest OS may ignore the request.
     * @param resource $domain Domain resource of domain to shutdown.You can get domain resource using various functions (i.e.  or ).
     */
    function libvirt_domain_shutdown ($domain) {}
}

if (!function_exists('libvirt_domain_suspend')) {
    /**
     * Suspends an active domain, the process is frozen without further access to CPU resources and I/O but the memory used by the domain at the hypervisor level will stay allocated. Use  to reactivate the domain. This function may requires privileged access.
     * @param resource $domain Domain resource of domain to suspend.You can get domain resource using various functions (i.e.  or ).
     */
    function libvirt_domain_suspend ($domain) {}
}

if (!function_exists('libvirt_domain_managedsave')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_domain_managedsave ($conn) {}
}

if (!function_exists('libvirt_domain_undefine')) {
    /**
     * Undefine a domain but does not stop it if it is running.
     * @param resource $domain Domain resource of domain to undefine.You can get domain resource using various functions (i.e.  or ).
     */
    function libvirt_domain_undefine ($domain) {}
}

if (!function_exists('libvirt_domain_undefine_flags')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_undefine_flags ($conn, $flags) {}
}

if (!function_exists('libvirt_domain_reboot')) {
    /**
     * Reboot a domain, the domain object is still usable there after but the domain OS is being stopped for a restart. Note that the guest OS may ignore the request.
     * @param resource $domain Domain resource of domain to reboot.You can get domain resource using various functions (i.e.  or ).
     */
    function libvirt_domain_reboot ($domain) {}
}

if (!function_exists('libvirt_domain_reset')) {
    /**
     * Reset a domain immediately without any guest shutdown.
     * @param resource $domain Domain resource of domain to reset. You can get domain resource using various functions (i.e.  or ).
     */
    function libvirt_domain_reset ($domain) {}
}

if (!function_exists('libvirt_domain_define_xml')) {
    /**
     * Define a domain, but does not start it. This definition is persistent, until explicitly undefined with . The domain is defined using XML description provided.
     * @param resource $connection Libvirt connection obtained by calling .
     * @param string $xml XML description of the domain. For more details see
     * @return resource|bool
     */
    function libvirt_domain_define_xml ($connection, string $xml) {}
}

if (!function_exists('libvirt_domain_create_xml')) {
    /**
     * Launch a new guest domain, based on an XML description similar to the one returned by . This function may requires privileged access to the hypervisor. The domain is not persistent, so its definition will disappear when it is destroyed, or if the host is restarted (see  to define persistent domains).
     * @param resource $connection Libvirt connection obtained by calling .
     * @param string $xml XML description of the domain. For more details see
     * @return resource|bool
     */
    function libvirt_domain_create_xml ($connection, string $xml) {}
}

if (!function_exists('libvirt_domain_xml_from_native')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $format 
     * @param  $configData 
     * @return mixed
     */
    function libvirt_domain_xml_from_native ($conn, $format, $configData) {}
}

if (!function_exists('libvirt_domain_xml_to_native')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $format 
     * @param  $xmlData 
     * @return mixed
     */
    function libvirt_domain_xml_to_native ($conn, $format, $xmlData) {}
}

if (!function_exists('libvirt_domain_memory_peek')) {
    /**
     * This function allows you to read the contents of a domain's memory. The memory which is read is controlled by the 'start', 'size' and 'flags' parameters. If 'flags' is  then the 'start' and 'size' parameters are interpreted as virtual memory addresses for whichever task happens to be running on the domain at the moment. Although this sounds haphazard it is in fact what you want in order to read Linux kernel state, because it ensures that pointers in the kernel image can be interpreted coherently. 'buffer' is the return buffer and must be at least 'size' bytes. 'size' may be 0 to test if the call would succeed. NB. The remote driver imposes a 64K byte limit on 'size'. For your program to be able to work reliably over a remote connection you should split large requests to <= 65536 bytes.
     * @param resource $domain 
     * @param integer $start 
     * @param integer $size 
     * @param integer $flags 
     */
    function libvirt_domain_memory_peek ($domain, integer $start, integer $size, integer $flags) {}
}

if (!function_exists('libvirt_domain_memory_stats')) {
    /**
     * This function provides memory statistics for the domain. Up to  elements will be populated in the returned array with memory statistics from the domain. Only statistics supported by the domain, the driver, and this version of libvirt will be returned. The array is indexed by the numerical values of appropriate constants.
     * @param resource $domain Domain resource of domain to get memory stats.
     * @param integer $flags unused, always pass 0 (or ommit the parameter as 0 is default value
     * @return array
     */
    function libvirt_domain_memory_stats ($domain, integer $flags): array {}
}

if (!function_exists('libvirt_domain_set_memory')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $memory 
     * @return mixed
     */
    function libvirt_domain_set_memory ($conn, $memory) {}
}

if (!function_exists('libvirt_domain_set_max_memory')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $memory 
     * @return mixed
     */
    function libvirt_domain_set_max_memory ($conn, $memory) {}
}

if (!function_exists('libvirt_domain_set_memory_flags')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $memory 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_set_memory_flags ($conn, $memory, $flags) {}
}

if (!function_exists('libvirt_domain_block_commit')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $res 
     * @param  $disk 
     * @param  $base 
     * @param  $top 
     * @return mixed
     */
    function libvirt_domain_block_commit ($res, $disk, $base, $top) {}
}

if (!function_exists('libvirt_domain_block_copy')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $res 
     * @param  $disk 
     * @param  $destxml 
     * @param  $params 
     * @return mixed
     */
    function libvirt_domain_block_copy ($res, $disk, $destxml, $params) {}
}

if (!function_exists('libvirt_domain_block_pull')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $res 
     * @param  $disk 
     * @param  $bandwidth 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_block_pull ($res, $disk, $bandwidth, $flags) {}
}

if (!function_exists('libvirt_domain_block_rebase')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $res 
     * @param  $disk 
     * @param  $base 
     * @param  $bandwidth 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_block_rebase ($res, $disk, $base, $bandwidth, $flags) {}
}

if (!function_exists('libvirt_domain_block_stats')) {
    /**
     * This function returns block device (disk) stats for block devices attached to the domain. The path parameter is the name of the block device. Domains may have more than one block device. To get stats for each you should make multiple calls to this function. Individual fields within the stats structure may be returned as -1, which indicates that the hypervisor does not support that particular statistic.
     * @param resource $domain Domain resource of domain the block device is attached to
     * @param string $path Path to the block device, i.e. "hda"
     * @return array
     */
    function libvirt_domain_block_stats ($domain, string $path): array {}
}

if (!function_exists('libvirt_domain_block_resize')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $path 
     * @param  $size 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_block_resize ($conn, $path, $size, $flags) {}
}

if (!function_exists('libvirt_domain_block_job_info')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $dom 
     * @param  $disk 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_block_job_info ($dom, $disk, $flags) {}
}

if (!function_exists('libvirt_domain_block_job_abort')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $path 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_block_job_abort ($conn, $path, $flags) {}
}

if (!function_exists('libvirt_domain_block_job_set_speed')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $path 
     * @param  $bandwidth 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_block_job_set_speed ($conn, $path, $bandwidth, $flags) {}
}

if (!function_exists('libvirt_domain_interface_addresses')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $domain 
     * @param  $source 
     * @return mixed
     */
    function libvirt_domain_interface_addresses ($domain, $source) {}
}

if (!function_exists('libvirt_domain_interface_stats')) {
    /**
     * This function returns network interface stats for interfaces attached to the domain. The path parameter is the name of the network interface. Domains may have more than one network interface. To get stats for each you should make multiple calls to this function. Individual fields within the stats structure may be returned as -1, which indicates that the hypervisor does not support that particular statistic.
     * @param resource $domain Domain resource of domain the interface is attached to
     * @param string $path Path to the interface, i.e. "vnet1"
     * @return array
     */
    function libvirt_domain_interface_stats ($domain, string $path): array {}
}

if (!function_exists('libvirt_domain_get_connect')) {
    /**
     * Returns the connection resource for a domain.
     * @param resource $domain Domain resource of domain to get connection resource.
     */
    function libvirt_domain_get_connect ($domain) {}
}

if (!function_exists('libvirt_domain_migrate')) {
    /**
     * Performs migration of the domain from one host to another. For description of parameters and flags see .
     * @param resource $domain 
     * @param resource $dconn 
     * @param integer $flags 
     * @param string $dname 
     * @param string $uri 
     * @param integer $bandwith 
     */
    function libvirt_domain_migrate ($domain, resource $dconn, integer $flags, string $dname, string $uri, integer $bandwith) {}
}

if (!function_exists('libvirt_domain_migrate_to_uri')) {
    /**
     * Performs migration of the domain from one host to another. For description of parameters and flags see .
     * @param resource $domain 
     * @param string $dconnuri 
     * @param string $miguri 
     * @param string $dxml 
     * @param integer $flags 
     * @param string $dname 
     * @param string $uri 
     * @param integer $bandwith 
     */
    function libvirt_domain_migrate_to_uri ($domain, string $dconnuri, string $miguri, string $dxml, integer $flags, string $dname, string $uri, integer $bandwith) {}
}

if (!function_exists('libvirt_domain_migrate_to_uri2')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $res 
     * @param  $dconnUri 
     * @param  $migUri 
     * @param  $dxml 
     * @param  $flags 
     * @param  $dname 
     * @param  $bandwidth 
     * @return mixed
     */
    function libvirt_domain_migrate_to_uri2 ($res, $dconnUri, $migUri, $dxml, $flags, $dname, $bandwidth) {}
}

if (!function_exists('libvirt_domain_get_job_info')) {
    /**
     * Extract information about progress of a background job on a domain. Will return an error if the domain is not active. For exact description of returned values see .
     * @param resource $domain Domain resource of domain to get job information of
     * @return array
     */
    function libvirt_domain_get_job_info ($domain): array {}
}

if (!function_exists('libvirt_domain_xml_xpath')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $res 
     * @param  $xpath 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_xml_xpath ($res, $xpath, $flags) {}
}

if (!function_exists('libvirt_domain_get_block_info')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $res 
     * @param  $dev 
     * @return mixed
     */
    function libvirt_domain_get_block_info ($res, $dev) {}
}

if (!function_exists('libvirt_domain_get_network_info')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $res 
     * @param  $mac 
     * @return mixed
     */
    function libvirt_domain_get_network_info ($res, $mac) {}
}

if (!function_exists('libvirt_domain_get_autostart')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_domain_get_autostart ($conn) {}
}

if (!function_exists('libvirt_domain_set_autostart')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_set_autostart ($conn, $flags) {}
}

if (!function_exists('libvirt_domain_get_metadata')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $type 
     * @param  $uri 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_get_metadata ($conn, $type, $uri, $flags) {}
}

if (!function_exists('libvirt_domain_set_metadata')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $type 
     * @param  $metadata 
     * @param  $key 
     * @param  $uri 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_set_metadata ($conn, $type, $metadata, $key, $uri, $flags) {}
}

if (!function_exists('libvirt_domain_is_active')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_domain_is_active ($conn) {}
}

if (!function_exists('libvirt_domain_get_next_dev_ids')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_domain_get_next_dev_ids ($conn) {}
}

if (!function_exists('libvirt_domain_get_screenshot')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $server 
     * @param  $scancode 
     * @return mixed
     */
    function libvirt_domain_get_screenshot ($conn, $server, $scancode) {}
}

if (!function_exists('libvirt_domain_get_screenshot_api')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $screenID 
     * @return mixed
     */
    function libvirt_domain_get_screenshot_api ($conn, $screenID) {}
}

if (!function_exists('libvirt_domain_get_screen_dimensions')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $server 
     * @return mixed
     */
    function libvirt_domain_get_screen_dimensions ($conn, $server) {}
}

if (!function_exists('libvirt_domain_send_keys')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $server 
     * @param  $scancode 
     * @return mixed
     */
    function libvirt_domain_send_keys ($conn, $server, $scancode) {}
}

if (!function_exists('libvirt_domain_send_key_api')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $codeset 
     * @param  $holdime 
     * @param  $keycodes 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_send_key_api ($conn, $codeset, $holdime, $keycodes, $flags) {}
}

if (!function_exists('libvirt_domain_send_pointer_event')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $server 
     * @param  $posX 
     * @param  $poxY 
     * @param  $clicked 
     * @param  $release 
     * @return mixed
     */
    function libvirt_domain_send_pointer_event ($conn, $server, $posX, $poxY, $clicked, $release) {}
}

if (!function_exists('libvirt_domain_update_device')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $xml 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_update_device ($conn, $xml, $flags) {}
}

if (!function_exists('libvirt_domain_qemu_agent_command')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $cmd 
     * @param  $timeout 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_qemu_agent_command ($conn, $cmd, $timeout, $flags) {}
}

if (!function_exists('libvirt_list_domains')) {
    /**
     * This function returns array of domain resources for all domains defined and/or running on the hypervisor.
     * @param resource $connection Connection resource of hypervisor.
     * @return array
     */
    function libvirt_list_domains ($connection): array {}
}

if (!function_exists('libvirt_list_domain_resources')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_list_domain_resources ($conn) {}
}

if (!function_exists('libvirt_list_active_domain_ids')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_list_active_domain_ids ($conn) {}
}

if (!function_exists('libvirt_list_active_domains')) {
    /**
     * Get the list of active domains. Their hypervisor IDs are returned. You can use  to get domain resource from hypervisor ID.
     * @param resource $connection Connection resource of hypervisor.
     * @return array
     */
    function libvirt_list_active_domains ($connection): array {}
}

if (!function_exists('libvirt_list_inactive_domains')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_list_inactive_domains ($conn) {}
}

if (!function_exists('libvirt_domain_get_cpu_total_stats')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_domain_get_cpu_total_stats ($conn) {}
}

if (!function_exists('libvirt_domain_has_current_snapshot')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_has_current_snapshot ($conn, $flags) {}
}

if (!function_exists('libvirt_domain_snapshot_lookup_by_name')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $name 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_snapshot_lookup_by_name ($conn, $name, $flags) {}
}

if (!function_exists('libvirt_domain_snapshot_create')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_snapshot_create ($conn, $flags) {}
}

if (!function_exists('libvirt_domain_snapshot_create_xml')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $xml 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_snapshot_create_xml ($conn, $xml, $flags) {}
}

if (!function_exists('libvirt_domain_snapshot_current')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_snapshot_current ($conn, $flags) {}
}

if (!function_exists('libvirt_domain_snapshot_get_xml')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_snapshot_get_xml ($conn, $flags) {}
}

if (!function_exists('libvirt_domain_snapshot_revert')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_snapshot_revert ($conn, $flags) {}
}

if (!function_exists('libvirt_domain_snapshot_delete')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_domain_snapshot_delete ($conn, $flags) {}
}

if (!function_exists('libvirt_list_domain_snapshots')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_list_domain_snapshots ($conn, $flags) {}
}

if (!function_exists('libvirt_storagepool_lookup_by_name')) {
    /**
     * This function returns the storagepool resource for the given name.
     * @param resource $connection Connection resource of hypervisor.
     * @param string $storagepoolName Name of a storagepool
     * @return resource|bool
     */
    function libvirt_storagepool_lookup_by_name ($connection, string $storagepoolName) {}
}

if (!function_exists('libvirt_storagepool_lookup_by_volume')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_storagepool_lookup_by_volume ($conn) {}
}

if (!function_exists('libvirt_storagepool_list_volumes')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_storagepool_list_volumes ($conn) {}
}

if (!function_exists('libvirt_storagepool_get_info')) {
    /**
     * This function returns array containing storagepool information
     * @param resource $connection Connection resource of storagepool
     * @return array
     */
    function libvirt_storagepool_get_info ($connection): array {}
}

if (!function_exists('libvirt_storagepool_get_uuid_string')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_storagepool_get_uuid_string ($conn) {}
}

if (!function_exists('libvirt_storagepool_get_name')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_storagepool_get_name ($conn) {}
}

if (!function_exists('libvirt_storagepool_lookup_by_uuid_string')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $uuid 
     * @return mixed
     */
    function libvirt_storagepool_lookup_by_uuid_string ($conn, $uuid) {}
}

if (!function_exists('libvirt_storagepool_get_xml_desc')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $xpath 
     * @return mixed
     */
    function libvirt_storagepool_get_xml_desc ($conn, $xpath) {}
}

if (!function_exists('libvirt_storagepool_define_xml')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $xml 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_storagepool_define_xml ($conn, $xml, $flags) {}
}

if (!function_exists('libvirt_storagepool_undefine')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_storagepool_undefine ($conn) {}
}

if (!function_exists('libvirt_storagepool_create')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_storagepool_create ($conn) {}
}

if (!function_exists('libvirt_storagepool_destroy')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_storagepool_destroy ($conn) {}
}

if (!function_exists('libvirt_storagepool_is_active')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_storagepool_is_active ($conn) {}
}

if (!function_exists('libvirt_storagepool_get_volume_count')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_storagepool_get_volume_count ($conn) {}
}

if (!function_exists('libvirt_storagepool_refresh')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_storagepool_refresh ($conn, $flags) {}
}

if (!function_exists('libvirt_storagepool_set_autostart')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_storagepool_set_autostart ($conn, $flags) {}
}

if (!function_exists('libvirt_storagepool_get_autostart')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_storagepool_get_autostart ($conn) {}
}

if (!function_exists('libvirt_storagepool_build')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_storagepool_build ($conn) {}
}

if (!function_exists('libvirt_storagepool_delete')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_storagepool_delete ($conn) {}
}

if (!function_exists('libvirt_storagevolume_lookup_by_name')) {
    /**
     * This function returns the volume resource for the given name.
     * @param resource $connection Connection resource of the storagepool.
     * @param string $volumeName Name of a volume
     * @return resource|bool
     */
    function libvirt_storagevolume_lookup_by_name ($connection, string $volumeName) {}
}

if (!function_exists('libvirt_storagevolume_lookup_by_path')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $path 
     * @return mixed
     */
    function libvirt_storagevolume_lookup_by_path ($conn, $path) {}
}

if (!function_exists('libvirt_storagevolume_get_name')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_storagevolume_get_name ($conn) {}
}

if (!function_exists('libvirt_storagevolume_get_path')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_storagevolume_get_path ($conn) {}
}

if (!function_exists('libvirt_storagevolume_get_info')) {
    /**
     * This function returns array containing volume information
     * @param resource $volumeResource Connection resource of volume
     * @return array
     */
    function libvirt_storagevolume_get_info ($volumeResource): array {}
}

if (!function_exists('libvirt_storagevolume_get_xml_desc')) {
    /**
     * This function returns string containing volume information in XML format
     * @param resource $volumeResource Connection resource of volume
     * @return string
     */
    function libvirt_storagevolume_get_xml_desc ($volumeResource): string {}
}

if (!function_exists('libvirt_storagevolume_create_xml')) {
    /**
     * This function returns string containing volume information in XML format
     * @param resource $storagepoolResource Connection resource of the storagepool
     * @param string $xml XML information to base the new volume on
     * @return resource|bool
     */
    function libvirt_storagevolume_create_xml ($storagepoolResource, string $xml) {}
}

if (!function_exists('libvirt_storagevolume_create_xml_from')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $pool 
     * @param  $xml 
     * @param  $originalVolume 
     * @return mixed
     */
    function libvirt_storagevolume_create_xml_from ($pool, $xml, $originalVolume) {}
}

if (!function_exists('libvirt_storagevolume_delete')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_storagevolume_delete ($conn, $flags) {}
}

if (!function_exists('libvirt_storagevolume_download')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $stream 
     * @param  $offset 
     * @param  $length 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_storagevolume_download ($conn, $stream, $offset, $length, $flags) {}
}

if (!function_exists('libvirt_storagevolume_upload')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $stream 
     * @param  $offset 
     * @param  $length 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_storagevolume_upload ($conn, $stream, $offset, $length, $flags) {}
}

if (!function_exists('libvirt_storagevolume_resize')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $capacity 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_storagevolume_resize ($conn, $capacity, $flags) {}
}

if (!function_exists('libvirt_list_storagepools')) {
    /**
     * This function returns array of storagepool names for the connection resource.
     * @param resource $connection Connection resource of hypervisor.
     * @return array
     */
    function libvirt_list_storagepools ($connection): array {}
}

if (!function_exists('libvirt_list_active_storagepools')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_list_active_storagepools ($conn) {}
}

if (!function_exists('libvirt_list_inactive_storagepools')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_list_inactive_storagepools ($conn) {}
}

if (!function_exists('libvirt_network_define_xml')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $xml 
     * @return mixed
     */
    function libvirt_network_define_xml ($conn, $xml) {}
}

if (!function_exists('libvirt_network_get_xml_desc')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $xpath 
     * @return mixed
     */
    function libvirt_network_get_xml_desc ($conn, $xpath) {}
}

if (!function_exists('libvirt_network_undefine')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_network_undefine ($conn) {}
}

if (!function_exists('libvirt_network_get')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $name 
     * @return mixed
     */
    function libvirt_network_get ($conn, $name) {}
}

if (!function_exists('libvirt_network_get_active')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_network_get_active ($conn) {}
}

if (!function_exists('libvirt_network_set_active')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_network_set_active ($conn, $flags) {}
}

if (!function_exists('libvirt_network_get_bridge')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_network_get_bridge ($conn) {}
}

if (!function_exists('libvirt_network_get_information')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_network_get_information ($conn) {}
}

if (!function_exists('libvirt_network_get_uuid_string')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_network_get_uuid_string ($conn) {}
}

if (!function_exists('libvirt_network_get_uuid')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_network_get_uuid ($conn) {}
}

if (!function_exists('libvirt_network_get_name')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_network_get_name ($conn) {}
}

if (!function_exists('libvirt_network_get_autostart')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_network_get_autostart ($conn) {}
}

if (!function_exists('libvirt_network_set_autostart')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_network_set_autostart ($conn, $flags) {}
}

if (!function_exists('libvirt_list_all_networks')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_list_all_networks ($conn, $flags) {}
}

if (!function_exists('libvirt_list_networks')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_list_networks ($conn, $flags) {}
}

if (!function_exists('libvirt_network_get_dhcp_leases')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $mac 
     * @param  $flags 
     * @return mixed
     */
    function libvirt_network_get_dhcp_leases ($conn, $mac, $flags) {}
}

if (!function_exists('libvirt_node_get_info')) {
    /**
     * Extract hardware information about the node (machine running the hypervisor).
     * @param resource $connection Connection resource of hypervisor.
     * @return array
     */
    function libvirt_node_get_info ($connection): array {}
}

if (!function_exists('libvirt_node_get_cpu_stats')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $cpunr 
     * @return mixed
     */
    function libvirt_node_get_cpu_stats ($conn, $cpunr) {}
}

if (!function_exists('libvirt_node_get_cpu_stats_for_each_cpu')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $time 
     * @return mixed
     */
    function libvirt_node_get_cpu_stats_for_each_cpu ($conn, $time) {}
}

if (!function_exists('libvirt_node_get_mem_stats')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_node_get_mem_stats ($conn) {}
}

if (!function_exists('libvirt_node_get_free_memory')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_node_get_free_memory ($conn) {}
}

if (!function_exists('libvirt_nodedev_get')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_nodedev_get ($conn) {}
}

if (!function_exists('libvirt_nodedev_capabilities')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_nodedev_capabilities ($conn) {}
}

if (!function_exists('libvirt_nodedev_get_xml_desc')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $xpath 
     * @return mixed
     */
    function libvirt_nodedev_get_xml_desc ($conn, $xpath) {}
}

if (!function_exists('libvirt_nodedev_get_information')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_nodedev_get_information ($conn) {}
}

if (!function_exists('libvirt_list_nodedevs')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $cap 
     * @return mixed
     */
    function libvirt_list_nodedevs ($conn, $cap) {}
}

if (!function_exists('libvirt_nwfilter_define_xml')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $xml 
     * @return mixed
     */
    function libvirt_nwfilter_define_xml ($conn, $xml) {}
}

if (!function_exists('libvirt_nwfilter_undefine')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_nwfilter_undefine ($conn) {}
}

if (!function_exists('libvirt_nwfilter_get_xml_desc')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $xpath 
     * @return mixed
     */
    function libvirt_nwfilter_get_xml_desc ($conn, $xpath) {}
}

if (!function_exists('libvirt_nwfilter_get_uuid_string')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_nwfilter_get_uuid_string ($conn) {}
}

if (!function_exists('libvirt_nwfilter_get_uuid')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_nwfilter_get_uuid ($conn) {}
}

if (!function_exists('libvirt_nwfilter_get_name')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_nwfilter_get_name ($conn) {}
}

if (!function_exists('libvirt_nwfilter_lookup_by_name')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $name 
     * @return mixed
     */
    function libvirt_nwfilter_lookup_by_name ($conn, $name) {}
}

if (!function_exists('libvirt_nwfilter_lookup_by_uuid_string')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $uuid 
     * @return mixed
     */
    function libvirt_nwfilter_lookup_by_uuid_string ($conn, $uuid) {}
}

if (!function_exists('libvirt_nwfilter_lookup_by_uuid')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $uuid 
     * @return mixed
     */
    function libvirt_nwfilter_lookup_by_uuid ($conn, $uuid) {}
}

if (!function_exists('libvirt_list_all_nwfilters')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_list_all_nwfilters ($conn) {}
}

if (!function_exists('libvirt_list_nwfilters')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @return mixed
     */
    function libvirt_list_nwfilters ($conn) {}
}

if (!function_exists('libvirt_get_last_error')) {
    /**
     * Returns the last error produced by libvirt library. Does not reset it so you can read the same error multiple times. TODO: maybe would be better to reset the error.
     */
    function libvirt_get_last_error () {}
}

if (!function_exists('libvirt_get_last_error_code')) {
    /**
     * A predefined method set by the library, and not documented...
     * @return mixed
     */
    function libvirt_get_last_error_code () {}
}

if (!function_exists('libvirt_get_last_error_domain')) {
    /**
     * A predefined method set by the library, and not documented...
     * @return mixed
     */
    function libvirt_get_last_error_domain () {}
}

if (!function_exists('libvirt_version')) {
    /**
     * Provides two information back, libvirt is the version of the library while type will be the version of the hypervisor type against which the library was compiled
     * @param string $type Hypervisor type against which the library was compiled. If  is NULL, "Xen" is assumed.
     * @return array
     */
    function libvirt_version (string $type = null): array {}
}

if (!function_exists('libvirt_check_version')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $major 
     * @param  $minor 
     * @param  $micro 
     * @param  $type 
     * @return mixed
     */
    function libvirt_check_version ($major, $minor, $micro, $type) {}
}

if (!function_exists('libvirt_has_feature')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $name 
     * @return mixed
     */
    function libvirt_has_feature ($name) {}
}

if (!function_exists('libvirt_get_iso_images')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $path 
     * @return mixed
     */
    function libvirt_get_iso_images ($path) {}
}

if (!function_exists('libvirt_image_create')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $name 
     * @param  $size 
     * @param  $format 
     * @return mixed
     */
    function libvirt_image_create ($conn, $name, $size, $format) {}
}

if (!function_exists('libvirt_image_remove')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $conn 
     * @param  $image 
     * @return mixed
     */
    function libvirt_image_remove ($conn, $image) {}
}

if (!function_exists('libvirt_logfile_set')) {
    /**
     * A predefined method set by the library, and not documented...
     * @param  $filename 
     * @param  $maxsize 
     * @return mixed
     */
    function libvirt_logfile_set ($filename, $maxsize) {}
}

if (!function_exists('libvirt_print_binding_resources')) {
    /**
     * A predefined method set by the library, and not documented...
     * @return mixed
     */
    function libvirt_print_binding_resources () {}
}

if (!function_exists('libvirt_get_active_domain_count')) {
    /**
     * Provides the number of active domains.
     * @param resource $connection Connection resource of hypervisor.
     * @return int
     */
    function libvirt_get_active_domain_count ($connection): int {}
}

if (!function_exists('libvirt_get_domain_count')) {
    /**
     * Get the number of active and inactive domains.
     * @param resource $connection Connection resource of hypervisor.
     * @return int
     */
    function libvirt_get_domain_count ($connection): int {}
}

if (!function_exists('libvirt_get_hostname')) {
    /**
     * This returns the system hostname on which the hypervisor is running (the result of the gethostname(2) system call). If we are connected to a remote system, then this returns the hostname of the remote system.
     * @param resource $connection Connection resource of hypervisor.
     * @return string
     */
    function libvirt_get_hostname ($connection): string {}
}

if (!function_exists('libvirt_get_inactive_domain_count')) {
    /**
     * Provides the number of defined but inactive domains.
     * @param resource $connection Connection resource of hypervisor.
     * @return int
     */
    function libvirt_get_inactive_domain_count ($connection): int {}
}

if (!function_exists('libvirt_list_defined_domains')) {
    /**
     * Get the names of defined but inactive domains. You can use  to get domain resource from name.
     * @param resource $connection Connection resource of hypervisor.
     * @return array
     */
    function libvirt_list_defined_domains ($connection): array {}
}

if (!function_exists('libvirt_list_volumes')) {
    /**
     * This function returns array of volume names in a storagepool.
     * @param resource $storagepoolResource 
     * @param  $connection Storagepool reousrce.
     * @return array
     */
    function libvirt_list_volumes ($storagepoolResource, $connection): array {}
}
