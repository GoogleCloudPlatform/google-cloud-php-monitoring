<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime.proto

namespace GPBMetadata\Google\Monitoring\V3;

class Uptime
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\MonitoredResource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af30e0a21676f6f676c652f6d6f6e69746f72696e672f76332f75707469" .
            "6d652e70726f746f1214676f6f676c652e6d6f6e69746f72696e672e7633" .
            "1a1e676f6f676c652f70726f746f6275662f6475726174696f6e2e70726f" .
            "746f22720a0f496e7465726e616c436865636b657212120a0a70726f6a65" .
            "63745f6964180120012809120f0a076e6574776f726b1802200128091210" .
            "0a086763705f7a6f6e6518032001280912120a0a636865636b65725f6964" .
            "18042001280912140a0c646973706c61795f6e616d6518052001280922c1" .
            "090a11557074696d65436865636b436f6e666967120c0a046e616d651801" .
            "2001280912140a0c646973706c61795f6e616d65180220012809123b0a12" .
            "6d6f6e69746f7265645f7265736f7572636518032001280b321d2e676f6f" .
            "676c652e6170692e4d6f6e69746f7265645265736f757263654800124f0a" .
            "0e7265736f757263655f67726f757018042001280b32352e676f6f676c65" .
            "2e6d6f6e69746f72696e672e76332e557074696d65436865636b436f6e66" .
            "69672e5265736f7572636547726f7570480012470a0a687474705f636865" .
            "636b18052001280b32312e676f6f676c652e6d6f6e69746f72696e672e76" .
            "332e557074696d65436865636b436f6e6669672e48747470436865636b48" .
            "0112450a097463705f636865636b18062001280b32302e676f6f676c652e" .
            "6d6f6e69746f72696e672e76332e557074696d65436865636b436f6e6669" .
            "672e546370436865636b480112290a06706572696f6418072001280b3219" .
            "2e676f6f676c652e70726f746f6275662e4475726174696f6e122a0a0774" .
            "696d656f757418082001280b32192e676f6f676c652e70726f746f627566" .
            "2e4475726174696f6e12500a10636f6e74656e745f6d6174636865727318" .
            "092003280b32362e676f6f676c652e6d6f6e69746f72696e672e76332e55" .
            "7074696d65436865636b436f6e6669672e436f6e74656e744d6174636865" .
            "7212410a1073656c65637465645f726567696f6e73180a2003280e32272e" .
            "676f6f676c652e6d6f6e69746f72696e672e76332e557074696d65436865" .
            "636b526567696f6e12130a0b69735f696e7465726e616c180f2001280812" .
            "400a11696e7465726e616c5f636865636b657273180e2003280b32252e67" .
            "6f6f676c652e6d6f6e69746f72696e672e76332e496e7465726e616c4368" .
            "65636b65721a610a0d5265736f7572636547726f757012100a0867726f75" .
            "705f6964180120012809123e0a0d7265736f757263655f74797065180220" .
            "01280e32272e676f6f676c652e6d6f6e69746f72696e672e76332e47726f" .
            "75705265736f75726365547970651ae4020a0948747470436865636b120f" .
            "0a077573655f73736c180120012808120c0a047061746818022001280912" .
            "0c0a04706f727418032001280512580a09617574685f696e666f18042001" .
            "280b32452e676f6f676c652e6d6f6e69746f72696e672e76332e55707469" .
            "6d65436865636b436f6e6669672e48747470436865636b2e426173696341" .
            "757468656e7469636174696f6e12140a0c6d61736b5f6865616465727318" .
            "0520012808124f0a076865616465727318062003280b323e2e676f6f676c" .
            "652e6d6f6e69746f72696e672e76332e557074696d65436865636b436f6e" .
            "6669672e48747470436865636b2e48656164657273456e7472791a390a13" .
            "426173696341757468656e7469636174696f6e12100a08757365726e616d" .
            "6518012001280912100a0870617373776f72641802200128091a2e0a0c48" .
            "656164657273456e747279120b0a036b6579180120012809120d0a057661" .
            "6c75651802200128093a0238011a180a08546370436865636b120c0a0470" .
            "6f72741801200128051a210a0e436f6e74656e744d617463686572120f0a" .
            "07636f6e74656e74180120012809420a0a087265736f7572636542140a12" .
            "636865636b5f726571756573745f74797065226e0a0d557074696d654368" .
            "65636b497012370a06726567696f6e18012001280e32272e676f6f676c65" .
            "2e6d6f6e69746f72696e672e76332e557074696d65436865636b52656769" .
            "6f6e12100a086c6f636174696f6e18022001280912120a0a69705f616464" .
            "726573731803200128092a650a11557074696d65436865636b526567696f" .
            "6e12160a12524547494f4e5f554e535045434946494544100012070a0355" .
            "53411001120a0a064555524f5045100212110a0d534f5554485f414d4552" .
            "494341100312100a0c415349415f5041434946494310042a5b0a1147726f" .
            "75705265736f7572636554797065121d0a195245534f555243455f545950" .
            "455f554e5350454349464945441000120c0a08494e5354414e4345100112" .
            "190a154157535f454c425f4c4f41445f42414c414e434552100242a3010a" .
            "18636f6d2e676f6f676c652e6d6f6e69746f72696e672e7633420b557074" .
            "696d6550726f746f50015a3e676f6f676c652e676f6c616e672e6f72672f" .
            "67656e70726f746f2f676f6f676c65617069732f6d6f6e69746f72696e67" .
            "2f76333b6d6f6e69746f72696e67aa021a476f6f676c652e436c6f75642e" .
            "4d6f6e69746f72696e672e5633ca021a476f6f676c655c436c6f75645c4d" .
            "6f6e69746f72696e675c5633620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

