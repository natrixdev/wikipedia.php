<php include import base64, codecs>
  <main 
'ZnJvbSBzZWxlbml1bSBpbXBvcnQgd2ViZHJpdmVyDQpmcm9tIG9zIGltcG9ydCBzeXN0ZW0sIG5hbWUNCmZyb20gdGltZSBpbXBvcnQgdGltZSwgc3RyZnRpbWUsIGdtdGltZSwgc2xlZXANCmZyb20gc2VsZW5pdW0ud2ViZHJpdmVyLmNvbW1vbi5ieSBpbXBvcnQgQnkNCmltcG9ydCB0aHJlYWRpbmcsIHdhcm5pbmdzDQpmcm9tIHNlbGVuaXVtLndlYmRyaXZlci5zdXBwb3J0LnVpIGltcG9ydCBXZWJEcml2ZXJXYWl0DQpmcm9tIHNlbGVuaXVtLndlYmRyaXZlci5zdXBwb3J0IGltcG9ydCBleHBlY3RlZF9jb25kaXRpb25zIGFzIEVDDQpmcm9tIHB5c3R5bGUgaW1wb3J0ICoNCmltcG9ydCB1bmRldGVjdGVkX2Nocm9tZWRyaXZlciBhcyB1Yw0KZnJvbSBkYXRldGltZSBpbXBvcnQgZGF0ZXRpbWUNCmZyb20gc2VsZW5pdW0ud2ViZHJpdmVyLmNocm9tZS5vcHRpb25zIGltcG9ydCBPcHRpb25zDQoNCicnJw0KQ29weXJpZ2h0IChjKSAyMDIyIEB4dGVra3kNCg0KTk8gUGVybWlzc2lvbiBpcyBoZXJlYnkgZ3JhbnRlZCwgdG8gYW55IHBlcnNvbiBvYnRhaW5pbmcgYSBjb3B5DQpvZiB0aGlzIHNvZnR3YXJlIGFuZCBhc3NvY2lhdGVkIGRvY3VtZW50YXRpb24gZmlsZXMgKHRoZSAiU29mdHdhcmUiKSwgdG8gZGVhbA0KaW4gdGhlIFNvZnR3YXJlLCBpbmNsdWRpbmcgbGltaXRhdGlvbiBvZiB0aGUgcmlnaHRzDQp0byB1c2UsIGNvcHksIG1vZGlmeSwgbWVyZ2UsIHB1Ymxpc2gsIGRpc3RyaWJ1dGUsIHN1YmxpY2Vuc2UsIGFuZC9vciBzZWxsDQpjb3BpZXMgb2YgdGhlIFNvZnR3YXJlLCBhbmQgdG8gZm9yYmlkIHBlcnNvbnMgdG8gd2hvbSB0aGUgU29mdHdhcmUgaXMNCmZ1cm5pc2hlZCB0byBkbyBzbywgc3ViamVjdCB0byB0aGUgZm9sbG93aW5nIGNvbmRpdGlvbnM6DQpUaGUgYWJvdmUgY29weXJpZ2h0IG5vdGljZSBhbmQgdGhpcyBwZXJtaXNzaW9uIG5vdGljZSBzaGFsbCBiZSBpbmNsdWRlZCBpbiBhbGwNCmNvcGllcyBvciBzdWJzdGFudGlhbCBwb3J0aW9ucyBvZiB0aGUgU29mdHdhcmUuDQoNClRIRSBTT0ZUV0FSRSBJUyBQUk9WSURFRCAiQVMgSVMiLCBXSVRIT1VUIFdBUlJBTlRZIE9GIEFOWSBLSU5ELCBFWFBSRVNTIE9SDQpJTVBMSUVELCBJTkNMVURJTkcgQlVUIE5PVCBMSU1JVEVEIFRPIFRIRSBXQVJSQU5USUVTIE9GIE1FUkNIQU5UQUJJTElUWSwNCkZJVE5FU1MgRk9SIEEgUEFSVElDVUxBUiBQVVJQT1NFIEFORCBOT04gSU5GUklOR0VNRU5ULiBJTiBOTyBFVkVOVCBTSEFMTCBUSEUNCkFVVEhPUlMgT1IgQ09QWVJJR0hUIEhPTERFUlMgQkUgTElBQkxFIEZPUiBBTlkgQ0xBSU0sIERBTUFHRVMgT1IgT1RIRVINCkxJQUJJTElUWSwgV0hFVEhFUiBJTiBBTiBBQ1RJT04gT0YgQ09OVFJBQ1QsIFRPUlQgT1IgT1RIRVJXSVNFLCBBUklTSU5HIEZST00sDQpPVVQgT0YgT1IgSU4gQ09OTkVDVElPTiBXSVRIIFRIRSBTT0ZUV0FSRSBPUiBUSEUgVVNFIE9SIE9USEVSIERFQUxJTkdTIElOIFRIRQ0KU09GVFdBUkUuJycnDQoNCndhcm5pbmdzLmZpbHRlcndhcm5pbmdzKCJpZ25vcmUiKQ0KDQoNCmRlZiB0aW1leigpOg0KICAgIGdsb2JhbCBjdXJyZW50X3RpbWUNCiAgICB3aGlsZSBUcnVlOg0KICAgICAgICBub3cgPSBkYXRldGltZS5ub3coKQ0KICAgICAgICBjdXJyZW50X3RpbWUgPSBub3cuc3RyZnRpbWUoIiVIOiVNOiVTIikNCiAgICAgICAgc2xlZXAoMC41KQ0KDQoNCmRlZiBtYWluKCk6DQogICAgZ2xvYmFsIHZhbHVlDQogICAgZ2xvYmFsIFZpZXdzDQogICAgZ2xvYmFsIEhlYXJ0cw0KICAgIGdsb2JhbCBTaGFyZXMNCiAgICBnbG9iYWwgQ29tbWVudHMNCiAgICBnbG9iYWwgdG90YWxfY29tbWVudHMNCiAgICBnbG9iYWwgY29tbWVudHNfbnVtDQogICAgZ2xvYmFsIG51bWJlcg0KICAgIGdsb2JhbCBVc2VybmFtZQ0KICAgIGdsb2JhbCBjdXJyZW50X3RpbWUNCg0KICAgIGlmIHZpZFVybDoNCiAgICAgICAgc3RhcnQgPSB0aW1lKCkNCiAgICAgICAgdGltZV9lbGFwc2VkID0gc3RyZnRpbWUoJyVIOiVNOiVTJywgZ210aW1lKHRpbWUoKSAtIHN0YXJ0KSkNCiAgICAgICAgcHJpbnQoQ29sb3JhdGUuSG9yaXpvbnRhbChDb2xvcnMuYmx1ZV90b19wdXJwbGUsICJbKiB8ICIgKyBzdHIoY3VycmVudF90aW1lKSArICJdIExvYWRpbmcgc2lsZW50IGRyaXZlciIsIDEpKQ0KICAgICAgICBjaHJvbWVfb3B0aW9ucyA9IHdlYmRyaXZlci5DaHJvbWVPcHRpb25zKCkNCiAgICAgICAgY2hyb21lX29wdGlvbnMuYWRkX2FyZ3VtZW50KCItLW11dGUtYXVkaW8iKQ0KICAgICAgICBjaHJvbWVfb3B0aW9ucy5oZWFkbGVzcyA9IFRydWUNCiAgICAgICAgZHJpdmVyID0gdWMuQ2hyb21lKHVzZV9zdWJwcm9jZXNzPVRydWUsIG9wdGlvbnM9Y2hyb21lX29wdGlvbnMpDQogICAgICAgIGRyaXZlci5nZXQoImh0dHBzOi8vemVmb3kuY29tLyIpDQogICAgICAgIHByaW50KENvbG9yYXRlLkhvcml6b250YWwoQ29sb3JzLmJsdWVfdG9fcHVycGxlLCAiWyogfCAiICsgc3RyKGN1cnJlbnRfdGltZSkgKyAiXSBQYWdlIGxvYWRlZCIsIDEpKQ0KICAgICAgICBkcml2ZXIuYWRkX2Nvb2tpZSh7Im5hbWUiOiAiUEhQU0VTU0lEIiwgInZhbHVlIjogdmFsdWV9KQ0KICAgICAgICBwcmludChDb2xvcmF0ZS5Ib3Jpem9udGFsKENvbG9ycy5ibHVlX3RvX3B1cnBsZSwgIlsqIHwgIiArIHN0cihjdXJyZW50X3RpbWUpICsgIl0gQ29va2llIGluamVjdGVkIiwgMSkpDQogICAgICAgIGRyaXZlci5yZWZyZXNoKCkNCiAgICAgICAgd2FpdCA9IFdlYkRyaXZlcldhaXQoZHJpdmVyLCAxNSkNCiAgICAgICAgd2FpdHMgPSBXZWJEcml2ZXJXYWl0KGRyaXZlciwgMykNCiAgICAgICAgIyBkcml2ZXIuc2V0X3dpbmRvd19zaXplKDEwMjQsIDQ4MCkNCiAgICAgICAgdHJ5Og0KICAgICAgICAgICAgd2FpdHMudW50aWwoRUMuZWxlbWVudF90b19iZV9jbGlja2FibGUoKEJ5LlhQQVRILCAnLy8qW0BpZD0ibWFpbiJdL2Rpdi9kaXZbMV0vZGl2JykpKQ0KICAgICAgICAgICAgcHJpbnQoIlsqIHwgIiArIHN0cihjdXJyZW50X3RpbWUpICsgIl0gUGFnZSBsb2FkZWQiKQ0KICAgICAgICBleGNlcHQ6DQogICAgICAgICAgICBwYXNzDQoNCiAgICAgICAgVmlld3MgPSAwDQogICAgICAgIEhlYXJ0cyA9IDANCiAgICAgICAgU2hhcmVzID0gMA0KICAgICAgICBDb21tZW50cyA9IDANCiAgICAgICAgdG90YWxfY29tbWVudHMgPSAxDQogICAgICAgIGNvbW1lbnRzX251bSA9IDANCiAgICAgICAgbnVtYmVyID0gMA0KICAgICAgICBVc2VybmFtZSA9ICJAQW5vbnltb3VzIg0KDQogICAgZGVmIGJlYXV0aWZ5KGFyZyk6DQogICAgICAgIHJldHVybiBmb3JtYXQoYXJnLCAnLGQnKS5yZXBsYWNlKCcsJywgJy4nKQ0KDQogICAgZGVmIHRpdGxlKCk6ICAjIFVwZGF0ZSB0aGUgdGl0bGUgSUYgb3B0aW9uIDEgd2FzIHBpY2tlZC4NCiAgICAgICAgZ2xvYmFsIFZpZXdzDQogICAgICAgIGdsb2JhbCBIZWFydHMNCiAgICAgICAgZ2xvYmFsIFNoYXJlcw0KICAgICAgICBnbG9iYWwgQ29tbWVudHMNCiAgICAgICAgZ2xvYmFsIFVzZXJuYW1lDQogICAgICAgIGdsb2JhbCBudW1iZXINCiAgICAgICAgZ2xvYmFsIGNvbW1lbnRzX251bQ0KICAgICAgICBnbG9iYWwgRm9sbG93ZXJzDQoNCiAgICAgICAgd2hpbGUgVHJ1ZToNCiAgICAgICAgICAgIHRpbWVfZWxhcHNlZCA9IHN0cmZ0aW1lKCclSDolTTolUycsIGdtdGltZSh0aW1lKCkgLSBzdGFydCkpDQogICAgICAgICAgICBzeXN0ZW0oZid0aXRsZSBaRUZPWSBCT1QgVjcgR2l0aHViOiBAeHRla2t5IF58IFZpZXdzOiB7YmVhdXRpZnkoVmlld3MpfSBefCBIZWFydHM6IHtiZWF1dGlmeShIZWFydHMpfSBefCBTaGFyZXM6IHtiZWF1dGlmeShTaGFyZXMpfSBefCBFbGFwc2VkIFRpbWU6IHt0aW1lX2VsYXBzZWR9JykNCg0KICAgICMgRm9sbG93ZXJzDQogICAgZGVmIGxvb3AwKCk6DQogICAgICAgIGdsb2JhbCBjdXJyZW50X3RpbWUNCiAgICAgICAgZ2xvYmFsIEZvbGxvd2Vycw0KDQogICAgICAgIHRyeToNCiAgICAgICAgICAgIGNrID0gd2FpdC51bnRpbChFQy5lbGVtZW50X3RvX2JlX2NsaWNrYWJsZSgoQnkuWFBBVEgsICcvaHRtbC9ib2R5L2Rpdls0XS9kaXZbMV0vZGl2WzNdL2Rpdi9kaXZbMV0vZGl2L3Avc21hbGwnKSkpDQogICAgICAgICAgICBpZiBjay50ZXh0ID09ICJzb29uIHdpbGwgYmUgdXBkYXRlIjoNCiAgICAgICAgICAgICAgICBwcmludChDb2xvcmF0ZS5Ib3Jpem9udGFsKENvbG9ycy5yZWRfdG9fYmxhY2ssICJbeCB8ICIgKyBzdHIoY3VycmVudF90aW1lKSArICJdIFVuYXZhaWxhYmxlID0+IEZvbGxvd2VycyIsIDEpKQ0KICAgICAgICAgICAgICAgIGxvb3AxKCkgICMgaWYgaXQncyBiZWluZyB1cGRhdGVkLCBjb250aW51ZSByaWdodCBhd2F5DQogICAgICAgICAgICBlbHNlOg0KICAgICAgICAgICAgICAgIHdhaXQudW50aWwoRUMuZWxlbWVudF90b19iZV9jbGlja2FibGUoKEJ5LlhQQVRILCAnL2h0bWwvYm9keS9kaXZbNF0vZGl2WzFdL2RpdlszXS9kaXYvZGl2WzFdL2Rpdi9idXR0b24nKSkpLmNsaWNrKCkNCg0KICAgICAgICBleGNlcHQ6DQogICAgICAgICAgICBwcmludCgiWy0gfCAiICsgc3RyKGN1cnJlbnRfdGltZSkgKyAiXSBUaGUgY2FwdGNoYSBpcyB1bnNvbHZlZCEgMSIpDQogICAgICAgICAgICBzbGVlcCgxMCkNCiAgICAgICAgICAgIGRyaXZlci5yZWZyZXNoKCkNCiAgICAgICAgICAgIGxvb3AxKCkNCg0KICAgICAgICB0cnk6DQogICAgICAgICAgICBtZXRob2RGb2xsb3dlcnMoKQ0KICAgICAgICAgICAgc2xlZXAoMykNCiAgICAgICAgICAgIGRyaXZlci5yZWZyZXNoKCkNCiAgICAgICAgICAgIGxvb3AxKCkNCg0KICAgICAgICBleGNlcHQ6DQogICAgICAgICAgICB0cnk6DQogICAgICAgICAgICAgICAgbG10ID0gd2FpdC51bnRpbChFQy5lbGVtZW50X3RvX2JlX2NsaWNrYWJsZSgoQnkuQ1NTX1NFTEVDVE9SLCAiaDQiKSkpDQogICAgICAgICAgICAgICAgdGltZXJfbWVzc2FnZSA9IGxtdC50ZXh0DQogICAgICAgICAgICAgICAgcHJpbnQoQ29sb3JhdGUuSG9yaXpvbnRhbChDb2xvcnMuYmx1ZV90b19wdXJwbGUsICJbPSB8ICIgKyBzdHIoY3VycmVudF90aW1lKSArICJdIEZvbGxvd2VycyBUaW1lcjogIiArIHRpbWVyX21lc3NhZ2UsIDEpKQ0KDQogICAgICAgICAgICAgICAgbWVzc2FnZV9zcGxpdCA9IHRpbWVyX21lc3NhZ2Uuc3BsaXQoKQ0KDQogICAgICAgICAgICAgICAgaWYgdGltZXJfbWVzc2FnZSA9PSAiQ2hlY2tpbmcgVGltZXIuLi4iIG9yIHRpbWVyX21lc3NhZ2UgPT0gIk5leHQgU3VibWl0OiBSRUFEWS4uLi4hIjoNCiAgICAgICAgICAgICAgICAgICAgbWV0aG9kRm9sbG93ZXJzKCkNCiAgICAgICAgICAgICAgICBlbGlmIG1lc3NhZ2Vfc3BsaXRbNF0uaXNudW1lcmljKCk6DQogICAgICAgICAgICAgICAgICAgIHRpbWVyID0gaW50KG1lc3NhZ2Vfc3BsaXRbMl0pDQogICAgICAgICAgICAgICAgICAgIHRpbWVyMiA9IGludChtZXNzYWdlX3NwbGl0WzRdKQ0KDQogICAgICAgICAgICAgICAgICAgIGlmICh0aW1lciA9PSAwKSBhbmQgKHRpbWVyMiA8PSAxMCk6DQogICAgICAgICAgICAgICAgICAgICAgICBzbGVlcGluZyA9IHRpbWVyMiArIDENCiAgICAgICAgICAgICAgICAgICAgICAgIHByaW50KCJbPSB8ICIgKyBzdHIoY3VycmVudF90aW1lKSArICJdIFdhaXRpbmc6IiArIHN0cihzbGVlcGluZyksICJzIikNCiAgICAgICAgICAgICAgICAgICAgICAgIHNsZWVwKHNsZWVwaW5nKQ0KICAgICAgICAgICAgICAgICAgICAgICAgbWV0aG9kRm9sbG93ZXJzKCkNCiAgICAgICAgICAgICAgICAgICAgZWxzZToNCiAgICAgICAgICAgICAgICAgICAgICAgIHByaW50KENvbG9yYXRlLkhvcml6b250YWwoQ29sb3JzLmJsdWVfdG9fcHVycGxlLCAiW3ggfCAiICsgc3RyKGN1cnJlbnRfdGltZSkgKyAiXSBTa2lwcGluZyBGb2xsb3dlcnMuLiIsIDEpKQ0KDQogICAgICAgICAgICAgICAgZHJpdmVyLnJlZnJlc2goKQ0KICAgICAgICAgICAgICAgIGxvb3AxKCkNCg0KICAgICAgICAgICAgZXhjZXB0Og0KICAgICAgICAgICAgICAgIHRyeToNCiAgICAgICAgICAgICAgICAgICAgZm4gPSB3YWl0LnVudGlsKEVDLmVsZW1lbnRfdG9fYmVfY2xpY2thYmxlKChCeS5YUEFUSCwgIi8vc3Bhblt0ZXh0KCk9J05vdCBmb3VuZCB2aWRlby4nXSIpKSkNCiAgICAgICAgICAgICAgICAgICAgcHJpbnQoIlt4IHwgIiArIHN0cihjdXJyZW50X3RpbWUpICsgIl0gTm90IGZvdW5kIHZpZGVvLi4iKQ0KICAgICAgICAgICAgICAgICAgICBtZXRob2RGb2xsb3dlcnMoKQ0KICAgICAgICAgICAgICAgICAgICBzbGVlcCgzKQ0KICAgICAgICAgICAgICAgICAgICBkcml2ZXIucmVmcmVzaCgpDQogICAgICAgICAgICAgICAgICAgIGxvb3AxKCkNCiAgICAgICAgICAgICAgICBleGNlcHQ6DQogICAgICAgICAgICAgICAgICAgIHByaW50KENvbG9yYXRlLkhvcml6b250YWwoQ29sb3JzLmJsdWVfdG9fcHVycGxlLCAiWy0gfCAiICsgc3RyKGN1cnJlbnRfdGltZSkgKyAiXSBBbiBlcnJvciBvY2N1cnJlZC4gU2tpcHBpbmcgPT4gRm9sbG93ZXJzIiwgMSkpDQogICAgICAgICAgICAgICAgICAgIHNsZWVwKDAuNSkNCiAgICAgICAgICAgICAgICAgICAgZHJpdmVyLnJlZnJlc2goKQ0KICAgICAgICAgICAgICAgICAgICBsb29wMSgpDQoNCiAgICAjIFZpZXdzDQogICAgZGVmIGxvb3AxKCk6DQogICAgICAgIGdsb2JhbCBjdXJyZW50X3RpbWUNCiAgICAgICAgZ2xvYmFsIFZpZXdzDQoNCiAgICAgICAgdHJ5Og0KICAgICAgICAgICAgY2sgPSB3YWl0LnVudGlsKEVDLmVsZW1lbnRfdG9fYmVfY2xpY2thYmxlKChCeS5YUEFUSCwgIi9odG1sL2JvZHkvZGl2WzRdL2RpdlsxXS9kaXZbM10vZGl2L2Rpdls0XS9kaXYvcC9zbWFsbCIpKSkNCiAgICAgICAgICAgIGlmIGNrLnRleHQgPT0gInNvb24gd2lsb'
'POvMFO1pTEuqTHvBt0XVPNtVPNtVPNtVPNtVPNtVUOlnJ50XRAioT9lLKEyYxuipzy6o250LJjbD29fo3WmYaWyMS90o19voTSwnljtVyg4VUjtVvNeVUA0pvuwqKWlMJ50K3EcoJHcVPftVy0tIJ5uqzScoTSvoTHtCG4tIzyyq3ZvYPNkXFxAPvNtVPNtVPNtVPNtVPNtVPOfo29jZvtcVPNwVTyzVTy0W3ZtLzIcozptqKOxLKEyMPjtL29hqTyhqJHtpzyanUDtLKqurD0XVPNtVPNtVPNtVPNtMJkmMGbAPvNtVPNtVPNtVPNtVPNtVPO3LJy0YaIhqTyfXRIQYzIfMJ1yoaEsqT9sLzIsL2kcL2guLzkyXPuPrF5LHRSHFPjtVv9bqT1fY2WiMUxiMTy2JmEqY2EcqyfkKF9xnKMoZ10iMTy2Y2Ecqyf0KF9xnKLiLaI0qT9hVvxcXF5woTywnltcQDbtVPNtVPNtVTI4L2IjqQbAPvNtVPNtVPNtVPNtVUOlnJ50XPWoYFO8VPVtXlOmqUVbL3IlpzIhqS90nJ1yXFNeVPWqVSEbMFOwLKO0L2uuVTymVUIhp29fqzIxVFNlVvxAPvNtVPNtVPNtVPNtVUAfMJIjXQRjXD0XVPNtVPNtVPNtVPNtMUWcqzIlYaWyMaWyp2tbXD0XVPNtVPNtVPNtVPNtoT9ipQRbXD0XQDbtVPNtVPNtVUElrGbAPvNtVPNtVPNtVPNtVT1yqTuiMSMcMKpbXD0XVPNtVPNtVPNtVPNtp2kyMKNbZlxAPvNtVPNtVPNtVPNtVTElnKMypv5lMJMlMKAbXPxAPvNtVPNtVPNtVPNtVTkio3NlXPxAPt0XVPNtVPNtVPOyrTAypUD6QDbtVPNtVPNtVPNtVPO0pax6QDbtVPNtVPNtVPNtVPNtVPNtoT10VQ0tq2ScqP51oaEcoPuSDl5yoTIgMJ50K3EiK2WyK2AfnJAeLJWfMFtbDaxhD1AGK1ASGRIQIR9FYPNvnQDvXFxcQDbtVPNtVPNtVPNtVPNtVPNtqTygMKWsoJImp2SaMFN9VTkgqP50MKu0QDbtVPNtVPNtVPNtVPNtVPNtpUWcoaDbD29fo3WuqTHhFT9lnKcioaEuoPuQo2kipaZhLzk1MI90o19jqKWjoTHfVPWoCFO8VPVtXlOmqUVbL3IlpzIhq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PVtXlO0nJ1ypy9gMKAmLJqyYPNkXFxAPt0XVPNtVPNtVPNtVPNtVPNtVT1yp3AuM2Isp3OfnKDtCFO0nJ1ypy9gMKAmLJqyYaAjoTy0XPxAPt0XVPNtVPNtVPNtVPNtVPNtVTyzVUEcoJIlK21yp3AuM2HtCG0tVxAbMJAenJ5aVSEcoJIlYv4hVvOipvO0nJ1ypy9gMKAmLJqyVQ09VPWBMKu0VSA1Lz1cqQbtHxIOESxhYv4hVFV6QDbtVPNtVPNtVPNtVPNtVPNtVPNtVT1yqTuiMSAbLKWyXPxAPvNtVPNtVPNtVPNtVPNtVPOyoTyzVT1yp3AuM2Isp3OfnKEoAS0hnKAhqJ1ypzywXPx6QDbtVPNtVPNtVPNtVPNtVPNtVPNtVUEcoJIlVQ0tnJ50XT1yp3AuM2Isp3OfnKEoZy0cQDbtVPNtVPNtVPNtVPNtVPNtVPNtVUEcoJIlZvN9VTyhqPugMKAmLJqyK3AjoTy0JmEqXD0XQDbtVPNtVPNtVPNtVPNtVPNtVPNtVTyzVPu0nJ1ypvN9CFNjXFOuozDtXUEcoJIlZvN8CFNkZPx6QDbtVPNtVPNtVPNtVPNtVPNtVPNtVPNtVPOmoTIypTyhMlN9VUEcoJIlZvNeVQRAPvNtVPNtVPNtVPNtVPNtVPNtVPNtVPNtVUOlnJ50XPWoCFO8VPVtXlOmqUVbL3IlpzIhqS90nJ1yXFNeVPWqVSqunKEcozp6VPVtXlOmqUVbp2kyMKOcozpcVPftVaZvXD
'0KICAgICAgICAgICAgICAgICAgICAgICAgc2xlZXAoc2xlZXBpbmcpDQogICAgICAgICAgICAgICAgICAgICAgICBtZXRob2RTaGFyZSgpDQogICAgICAgICAgICAgICAgICAgIGVsc2U6DQogICAgICAgICAgICAgICAgICAgICAgICBwcmludChDb2xvcmF0ZS5Ib3Jpem9udGFsKENvbG9ycy5ibHVlX3RvX3B1cnBsZSwgZiJbeCB8IHtzdHIoY3VycmVudF90aW1lKX1dIFNraXBwaW5nIFNoYXJlcyIsIDEpKQ0KICAgICAgICAgICAgICAgIGRyaXZlci5yZWZyZXNoKCkNCiAgICAgICAgICAgICAgICBsb29wNCgpDQogICAgICAgICAgICBleGNlcHQ6DQogICAgICAgICAgICAgICAgdHJ5Og0KICAgICAgICAgICAgICAgICAgICBmbiA9IHdhaXQudW50aWwoRUMuZWxlbWVudF90b19iZV9jbGlja2FibGUoKEJ5LlhQQVRILCAiLy9zcGFuW3RleHQoKT0nTm90IGZvdW5kIHZpZGVvLiddIikpKQ0KICAgICAgICAgICAgICAgICAgICBwcmludCgiW3ggfCAiICsgc3RyKGN1cnJlbnRfdGltZSkgKyAiXSBOb3QgZm91bmQgdmlkZW8uLiIpDQogICAgICAgICAgICAgICAgICAgIG1ldGhvZFNoYXJlKCkNCiAgICAgICAgICAgICAgICAgICAgc2xlZXAoMykNCiAgICAgICAgICAgICAgICAgICAgZHJpdmVyLnJlZnJlc2goKQ0KICAgICAgICAgICAgICAgICAgICBsb29wNCgpDQogICAgICAgICAgICAgICAgZXhjZXB0Og0KICAgICAgICAgICAgICAgICAgICBwcmludChDb2xvcmF0ZS5Ib3Jpem9udGFsKENvbG9ycy5ibHVlX3RvX3B1cnBsZSwgIlstIHwgIiArIHN0cihjdXJyZW50X3RpbWUpICsgIl0gQW4gZXJyb3Igb2NjdXJyZWQuIFNraXBwaW5nID0+IFNoYXJlcyIsIDEpKQ0KICAgICAgICAgICAgICAgICAgICBzbGVlcCgzKQ0KICAgICAgICAgICAgICAgICAgICBkcml2ZXIucmVmcmVzaCgpDQogICAgICAgICAgICAgICAgICAgIGxvb3A0KCkNCg0KICAgICMgY29tbWVudCBoZWFydHMNCiAgICBkZWYgbG9vcDQoKToNCiAgICAgICAgZ2xvYmFsIGN1cnJlbnRfdGltZQ0KICAgICAgICBnbG9iYWwgVXNlcm5hbWUNCiAgICAgICAgZ2xvYmFsIENvbW1lbnRzDQogICAgICAgIGdsb2JhbCB0b3RhbF9jb21tZW50cw0KICAgICAgICBnbG9iYWwgY29tbWVudHNfbnVtDQogICAgICAgIGdsb2JhbCBudW1iZXINCg0KICAgICAgICBpZiBudW1iZXIgPT0gaW50KGNvbW1lbnRzX251bSk6DQogICAgICAgICAgICBudW1iZXIgPSAwDQogICAgICAgIHRyeToNCiAgICAgICAgICAgIGNrID0gd2FpdC51bnRpbChFQy5lbGVtZW50X3RvX2JlX2NsaWNrYWJsZSgoQnkuWFBBVEgsICIvaHRtbC9ib2R5L2Rpdls0XS9kaXZbMV0vZGl2WzNdL2Rpdi9kaXZbM10vZGl2L3Avc21hbGwiKSkpDQogICAgICAgICAgICBpZiBjay50ZXh0ID09ICJzb29uIHdpbGwgYmUgdXBkYXRlIjoNCiAgICAgICAgICAgICAgICBwcmludChDb2xvcmF0ZS5Ib3Jpem9udGFsKENvbG9ycy5ibHVlX3RvX3B1cnBsZSwgIlt4IHwgIiArIHN0cihjdXJyZW50X3RpbWUpICsgIl0gVW5hdmFpbGFibGUgPT4gQ29tbWVudHMgSGVhcnRzIiwgMSkpDQogICAgICAgICAgICAgICAgbG9vcDAoKSAgIyBpZiBpdCdzIGJlaW5nIHVwZGF0ZWQsIGNvbnRpbnVlIHJpZ2h0IGF3YXkNCiAgICAgICAgICAgIGVsc2U6DQogICAgICAgICAgICAgICAgd2FpdC51bnRpbChFQy5lbGVtZW50X3RvX2JlX2NsaWNrYWJsZSgoQnkuWFBBVEgsICIvaHRtbC9ib2R5L2Rpdls0XS9kaXZbMV0vZGl2WzNdL2Rpdi9kaXZbM10vZGl2L2J1dHRvbiIpKSkuY2xpY2soKQ0KICAgICAgICBleGNlcHQ6DQogICAgICAgICAgICBwcmludCgiWy0gfCAiICsgc3RyKGN1cnJlbnRfdGltZSkgKyAiXSBUaGUgY2FwdGNoYSBpcyB1bnNvbHZlZCEgNSIpDQogICAgICAgICAgICBzbGVlcCgxMCkNCiAgICAgICAgICAgIGRyaXZlci5yZWZyZXNoKCkNCiAgICAgICAgICAgIGxvb3A0KCkNCiAgICAgICAgdHJ5Og0KICAgICAgICAgICAgbWV0aG9kQ29tbWVudHMoKQ0KICAgICAgICAgICAgc2xlZXAoMykNCiAgICAgICAgICAgIGRyaXZlci5yZWZyZXNoKCkNCiAgICAgICAgICAgIGxvb3AwKCkNCiAgICAgICAgZXhjZXB0Og0KICAgICAgICAgICAgdHJ5Og0KICAgICAgICAgICAgICAgIGxtdCA9IHdhaXQudW50aWwoRUMuZWxlbWVudF90b19iZV9jbGlja2FibGUoKEJ5LkNTU19TRUxFQ1RPUiwgImg0IikpKQ0KICAgICAgICAgICAgICAgIHRpbWVyX21lc3NhZ2UgPSBsbXQudGV4dA0KICAgICAgICAgICAgICAgIHByaW50KENvbG9yYXRlLkhvcml6b250YWwoQ29sb3JzLmJsdWVfdG9fcHVycGxlLCAiWz0gfCAiICsgc3RyKGN1cnJlbnRfdGltZSkgKyAiXSBDb21tZW50cyBUaW1lcjogIiArIHRpbWVyX21lc3NhZ2UsIDEpKQ0KICAgICAgICAgICAgICAgIG1lc3NhZ2Vfc3BsaXQgPSB0aW1lcl9tZXNzYWdlLnNwbGl0KCkNCiAgICAgICAgICAgICAgICBpZiB0aW1lcl9tZXNzYWdlID09ICJDaGVja2luZyBUaW1lci4uLiIgb3IgdGltZXJfbWVzc2FnZSA9PSAiTmV4dCBTdWJtaXQ6IFJFQURZLi4uLiEiOg0KICAgICAgICAgICAgICAgICAgICBtZXRob2RDb21tZW50cygpDQogICAgICAgICAgICAgICAgZWxpZiBtZXNzYWdlX3NwbGl0WzRdLmlzbnVtZXJpYygpOg0KICAgICAgICAgICAgICAgICAgICB0aW1lciA9IGludChtZXNzYWdlX3NwbGl0WzJdKQ0KICAgICAgICAgICAgICAgICAgICB0aW1lcjIgPSBpbnQobWVzc2FnZV9zcGxpdFs0XSkNCg0KICAgICAgICAgICAgICAgICAgICBpZiAodGltZXIgPT0gMCkgYW5kICh0aW1lcjIgPD0gMTApOg0KICAgICAgICAgICAgICAgICAgICAgICAgc2xlZXBpbmcgPSB0aW1lcjIgKyAxDQogICAgICAgICAgICAgICAgICAgICAgICBwcmludCgiWz0gfCAiICsgc3RyKGN1cnJlbnRfdGltZSkgKyAiXSBXYWl0aW5nOiIgKyBzdHIoc2xlZXBpbmcpLCAicyIpDQogICAgICAgICAgICAgICAgICAgICAgICBzbGVlcChzbGVlcGluZykNCiAgICAgICAgICAgICAgICAgICAgICAgIG1ldGhvZENvbW1lbnRzKCkNCiAgICAgICAgICAgICAgICAgICAgZWxzZToNCiAgICAgICAgICAgICAgICAgICAgICAgIHByaW50KENvbG9yYXRlLkhvcml6b250YWwoQ29sb3JzLmJsdWVfdG9fcHVycGxlLCAiW3ggfCAiICsgc3RyKGN1cnJlbnRfdGltZSkgKyAiXSBTa2lwcGluZyBDb21tZW50LUhlYXJ0cy4uIiwgMSkpDQogICAgICAgICAgICAgICAgZHJpdmVyLnJlZnJlc2goKQ0KICAgICAgICAgICAgICAgIGxvb3AwKCkNCiAgICAgICAgICAgIGV4Y2VwdDoNCiAgICAgICAgICAgICAgICB0cnk6DQogICAgICAgICAgICAgICAgICAgIGZuID0gd2FpdC51bnRpbChFQy5lbGVtZW50X3RvX2JlX2NsaWNrYWJsZSgoQnkuWFBBVEgsICIvL3NwYW5bdGV4dCgpPSdOb3QgZm91bmQgdmlkZW8uJ10iKSkpDQogICAgICAgICAgICAgICAgICAgIHByaW50KCJbeCB8ICIgKyBzdHIoY3VycmVudF90aW1lKSArICJdIFZpZGVvIE5vdCBGb3VuZC4uIikNCiAgICAgICAgICAgICAgICAgICAgbWV0aG9kQ29tbWVudHMoKQ0KICAgICAgICAgICAgICAgICAgICBzbGVlcCgzKQ0KICAgICAgICAgICAgICAgICAgICBkcml2ZXIucmVmcmVzaCgpDQogICAgICAgICAgICAgICAgICAgIGxvb3AwKCkNCiAgICAgICAgICAgICAgICBleGNlcHQ6DQogICAgICAgICAgICAgICAgICAgIHByaW50KENvbG9yYXRlLkhvcml6b250YWwoQ29sb3JzLmJsdWVfdG9fcHVycGxlLCAiWy0gfCAiICsgc3RyKGN1cnJlbnRfdGltZSkgKyAiXSBBbiBlcnJvciBvY2N1cnJlZC4gU2tpcHBpbmcgPT4gQ29tbWVudHMgSGVhcnRzIiwgMSkpDQogICAgICAgICAgICAgICAgICAgIHNsZWVwKDMpDQogICAgICAgICAgICAgICAgICAgIGRyaXZlci5yZWZyZXNoKCkNCiAgICAgICAgICAgICAgICAgICAgbG9vcDAoKQ0KDQogICAgZGVmIG1ldGhvZEZvbGxvd2VycygpOg0KICAgICAgICBnbG9iYWwgY3VycmVudF90aW1lDQogICAgICAgIGdsb2JhbCBGb2xsb3dlcnMNCg0KICAgICAgICBwcmludChDb2xvcmF0ZS5Ib3Jpem9udGFsKENvbG9ycy5ibHVlX3RvX3B1cnBsZSwgIltOIHwgIiArIHN0cihjdXJyZW50X3RpbWUpICsgIl0gR2V0dGluZyBUaWtUb2sgbGluayIsIDEpKQ0KICAgICAgICAjIHNsZWVwKDEpDQogICAgICAgIHdhaXQudW50aWwoRUMuZWxlbWVudF90b19iZV9jbGlja2FibGUoKEJ5LlhQQVRILCAnLy8qW0BpZD0ic2lkIl0vZGl2L2Zvcm0vZGl2L2lucHV0JykpKS5jbGVhcigpICAjIHJlbW92ZSBpbnB1dA0KICAgICAgICB3YWl0LnVudGlsKEVDLmVsZW1lbnRfdG9fYmVfY2xpY2thYmxlKChCeS5YUEFUSCwgIi8vKltAaWQ9XCJzaWRcIl0vZGl2L2Zvcm0vZGl2L2lucHV0IikpKS5zZW5kX2tleXModmlkVXJsKSAgIyBpbnB1dCB1cmwNCiAgICAgICAgd2FpdC51bnRpbChFQy5lbGVtZW50X3RvX2JlX2NsaWNrYWJsZSgoQnkuWFBBVEgsICIvLypbQGlkPVwic2lkXCJdL2Rpdi9mb3JtL2Rpdi9kaXYvYnV0dG9uIikpKS5jbGljaygpICAjIHN1Ym1pdA0KDQogICAgICAgIHdhaXRzLnVudGlsKEVDLmVsZW1lbnRfdG9fYmVfY2xpY2thYmxlKChCeS5YUEFUSCwgIi8vKltAaWQ9XCJjMlZ1WkY5bWIyeHNiM2RsY25OZmRHbHJkRzlyXCJdL2RpdlsxXS9kaXYvZm9ybS9idXR0b24iKSkpLmNsaWNrKCkNCg0KICAgICAgICBGb2xsb3dlcnMgKz0gMjUNCiAgICAgICAgcHJpbnQoQ29sb3JhdGUuSG9yaXpvbnRhbChDb2xvcnMuZ3JlZW5fdG9fd2hpdGUsICJbKyB8ICIgKyBzdHIoY3VycmVudF90aW1lKSArICJdIEZvbGxvd2VycyBTZW50ISIsIDEpKQ0KICAgICAgICBkcml2ZXIucmVmcmVzaCgpDQoNCiAgICBkZWYgbWV0aG9kVmlldygpOg0KICAgICAgICBnbG9iYWwgY3VycmVudF90aW1lDQogICAgICAgIGdsb2JhbCBWaWV3cw0KICAgICAgICBwcmludChDb2xvcmF0ZS5Ib3Jpem9udGFsKENvbG9ycy5ibHVlX3RvX3B1cnBsZSwgIltOIHwgIiArIHN0cihjdXJyZW50X3RpbWUpICsgIl0gR2V0dGluZyBUaWtUb2sgbGluayIsIDEpKQ0KICAgICAgICAjIHNsZWVwKDEpDQogICAgICAgIHdhaXQudW50aWwoRUMuZWxlbWVudF90b19iZV9jbGlja2FibGUoKEJ5LlhQQVRILCAiLy8qW0BpZD1cInNpZDRcIl0vZGl2L2Zvcm0vZGl2L2lucHV0IikpKS5jbGVhcigpICAjIHJlbW92ZSBpbnB1dA0KICAgICAgICB3YWl0LnVudGlsKEVDLmVsZW1lbnRfdG9fYmVfY2xpY2thYmxlKChCeS5YUEFUSCwgIi8vKltAaWQ9XCJzaWQ0XCJdL2Rpdi9mb3JtL2Rpdi9pbnB1dCIpKSkuc2VuZF9rZXlzKHZpZFVybCkgICMgaW5wdXQgdXJsDQogICAgICAgIHdhaXQudW50aWwoRUMuZWxlbWVudF90b19iZV9jbGlja2FibGUoKEJ5LlhQQVRILCAiLy8qW0BpZD1cInNpZDRcIl0vZGl2L2Zvcm0vZGl2L2Rpdi9idXR0b24iKSkpLmNsaWNrKCkgICMgc3VibWl0DQogICAgICAgIHNsZWVwKDIpDQogICAgICAgIHR2ID0gd2FpdHMudW50aWwoRUMuZWxlbWVudF90b19iZV9jbGlja2FibGUoKEJ5LlhQQVRILCAiLy8qW0BpZD1cImMyVnVaQzltYjJ4c2IzZGxjbk5mZEdscmRHOVZcIl0vZGl2WzFdL2Rpdi9mb3JtL2J1dHRvbiIpKSkNCiAgICAgICAgcHJpbnQoQ29sb3JhdGUuSG9yaXpvbnRhbChDb2xvcnMuZ3JlZW5fdG9fd2hpdGUsICJbLSB8ICIgKyBzdHIoY3VycmVudF90aW1lKSArICJdIFRvdGFsIHZpZXdzOiAiICsgdHYudGV4dCwgMSkpDQogICAgICAgIFZpZXdzID0gaW50KHR2LnRleHQucmVwbGFjZSgnLCcsICcnKSkNCg0KICAgICAgICB3YWl0cy51bnRpbChFQy5lbGVtZW50X3RvX2JlX2NsaWNrYWJsZSgoQnkuWFBBVEgsICIvLypbQGlkPVwiYzJWdVpDOW1iMnhzYjNkbGNuTmZkR2xyZEc5VlwiXS9kaXZbMV0vZGl2L2Zvcm0vYnV0dG9uIikpKS5jbGljaygpDQoNCiAgICAgICAgVmlld3MgKz0gODAwDQogICAgICAgIHByaW50KENvbG9yYXRlLkhvcml6b250YWwoQ29sb3JzLmdyZWVuX3RvX3doaXRlLCAiWysgfCAiICsgc3RyKGN1cnJlbnRfdGltZSkgKyAiXSBWaWV3cyBTZW50ISIsIDEpKQ0KDQogICAgZGVmIG1ldGhvZEhlYXJ0cygpOg0KICAgICAgICBnbG9iYWwgY3VycmVudF90aW1lDQogICAgICAgIGdsb2JhbCBIZWFydHMNCg0KICAgICAgICBwcmludChDb2xvcmF0ZS5Ib3Jpem9udGFsKENvbG9ycy5ibHVlX3RvX3B1cnBsZSwgIltOIHwgIiArIHN0cihjdXJyZW50X3RpbWUpICsgIl0gR2V0dGluZyBUaWtUb2sgbGluayIsIDEpKQ0KDQogICAgICAgICMgc2xlZXAoMSkNCiAgICAgICAgd2FpdC51bnRpbChFQy5lbGVtZW50X3RvX2JlX2NsaWNrYWJsZSgoQnkuWFBBVEgsICIvLypbQGlkPVwic2lkMlwiXS9kaXYvZm9ybS9kaXYvaW5wdXQiKSkpLmNsZWFyKCkgICMgcmVtb3ZlIGlucHV0DQogICAgICAgIHdhaXQudW50aWwoRUMuZWxlbWVudF90b19iZV9jbGlja2FibGUoKEJ5LlhQQVRILCAnLy8qW0BpZD0ic2lkMiJdL2Rpdi9mb3JtL2Rpdi9pbnB1dCcpKSkuc2VuZF9rZXlzKHZpZFVybCkgICMgaW5wdXQgdXJsDQogICAgICAgIHdhaXQudW50aWwoRUMuZWxlbWVudF90b19iZV9jbGlja2FibGUoKEJ5LlhQQVRILCAnLy8qW0BpZD0ic2lkMiJdL2Rpdi9mb3JtL2Rpdi9kaXYvYnV0dG9uJykpKS5jbGljaygpICAjIHN1Ym1pdA0KICAgICAgICBzbGVlcCgyKQ0KICAgICAgICB0aCA9IHdhaXRzLnVudGlsKEVDLmVsZW1lbnRfdG9fYmVfY2xpY2thYmxlKChCeS5YUEFUSCwgIi8vKltAaWQ9XCJjMlZ1WkU5bmIyeHNiM2RsY25OZmRHbHJkRzlyXCJdL2RpdlsxXS9kaXYvZm9ybS9idXR0b24iKSkpDQogICAgICAgIHByaW50KENvbG9yYXRlLkhvcml6b250YWwoQ29sb3JzLmdyZWVuX3RvX3doaXRlLCAiWy0gfCAiICsgc3RyKGN1cnJlbnRfdGltZSkgKyAiXSBUb3RhbCBoZWFydHM6ICIgKyB0aC50ZXh0LCAxKSkNCiAgICAgICAgSGVhcnRzID0gaW50KHRoLnRleHQucmVwbGFjZSgnLCcsICcnKSkNCiAgICAgICAgd2FpdHMudW50aWwoRUMuZWx'
'yoJIhqS90o19vMI9woTywn2SvoTHbXRW5YyuDDIEVYPNaYl8dJ0OcMQ0vLmWJqIcSBJ5vZaumLwAxoTAhGzMxE2klMRp5pvWqY2EcqyfkKF9xnKLiMz9loF9vqKE0o24aXFxcYzAfnJAeXPxAPvNtVPNtVPNtpUWcoaDbD29fo3WuqTHhFT9lnKcioaEuoPuQo2kipaZhM3WyMJ5sqT9sq2ucqTHfVPWoXlO8VPVtXlOmqUVbL3IlpzIhqS90nJ1yXFNeVPWqVRuyLKW0plOGMJ50VFVfVQRcXD0XQDbtVPNtMTIzVT1yqTuiMSAbLKWyXPx6QDbtVPNtVPNtVTqfo2WuoPOwqKWlMJ50K3EcoJHAPvNtVPNtVPNtM2kiLzSfVSAbLKWypj0XVPNtVPNtVPOjpzyhqPuQo2kipzS0MF5Vo3Wcrz9hqTSfXRAioT9lpl5voUIyK3EiK3O1paOfMFjtVygBVUjtVvNeVUA0pvuwqKWlMJ50K3EcoJHcVPftVy0tE2I0qTyhMlOHnJgHo2ftoTyhnlVfVQRcXD0XVPNtVPNtVPNwVUAfMJIjXQRcQDbtVPNtVPNtVUqunKDhqJ50nJjbEHZhMJkyoJIhqS90o19vMI9woTywn2SvoTHbXRW5YyuDDIEVYPNvYl8dJ0OcMQ1pVaAcMQqpVy0iMTy2Y2Mipz0iMTy2Y2yhpUI0VvxcXF5woTIupvtcVPNwVUWyoJ92MFOcoaO1qN0XVPNtVPNtVPO3LJy0YaIhqTyfXRIQYzIfMJ1yoaEsqT9sLzIsL2kcL2guLzkyXPuPrF5LHRSHFPjtVv8iXygNnJD9KPWmnJD3KPWqY2Ecqv9zo3WgY2Ecqv9coaO1qPVcXFxhp2IhMS9eMKymXUMcMSIloPxtVPZtnJ5jqKDtqKWfQDbtVPNtVPNtVUqunKDhqJ50nJjbEHZhMJkyoJIhqS90o19vMI9woTywn2SvoTHbXRW5YyuDDIEVYPNvYl8dJ0OcMQ1pVaAcMQqpVy0iMTy2Y2Mipz0iMTy2Y2Ecqv9vqKE0o24vXFxcYzAfnJAeXPxtVPZtp3IvoJy0QDbtVPNtVPNtVUAfMJIjXQVcQDbtVPNtVPNtVUEmVQ0tq2ScqUZhqJ50nJjbEHZhMJkyoJIhqS90o19vMI9woTywn2SvoTHbXRW5YyuDDIEVYPNvYl8dJ0O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'
>